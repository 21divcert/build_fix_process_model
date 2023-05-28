<?php

define ("XLIMIT", 149); /* X축 격자점 수 */
define ("YLIMIT", 253); /* Y축 격자점 수 */

define ("PI", asin(1.0)*2.0);
define ("DEGRAD", PI/180.0);
define ("RADDEG", 180.0/PI);

// data.go.kr
//define ("WEATHER_URL", "http://apis.data.go.kr/1360000/VilageFcstInfoService/getUltraSrtFcst"); // 초단기예보
//define ("WEATHER_URL", "http://apis.data.go.kr/1360000/VilageFcstInfoService/getVilageFcst"); // 동네예보
define ("WEATHER_URL", "http://apis.data.go.kr/1360000/VilageFcstInfoService_2.0/getUltraSrtFcst"); // 새 동네예보(2021.11.1일자 변경)
define ("SERVICE_KEY", "RPErR%2FEmqUNzBBBIU5lfjFMSqua%2FM63YVt97Tv4KtxvSQM%2FcOyqw0ZrYOzlp%2FhE0eWKaPlahXIpBkBlylrFILw%3D%3D"); // 발급받은 API-KEY

class DataGoUtil {
	public $map;
	
	public function __construct() {
		//
		// 동네예보 지도 정보
		//
		$this->map['Re'] = 6371.00877; // 지도반경
		$this->map['grid'] = 5.0; // 격자간격 (km)
		$this->map['slat1'] = 30.0; // 표준위도 1
		$this->map['slat2'] = 60.0; // 표준위도 2
		$this->map['olon'] = 126.0; // 기준점 경도
		$this->map['olat'] = 38.0; // 기준점 위도
		$this->map['xo'] = 210 / $this->map['grid']; // 기준점 X좌표
		$this->map['yo'] = 675 / $this->map['grid']; // 기준점 Y좌표
		$this->map['first'] = 0;
    }
    
    public function requestForecast($lat, $lon, $time = 0) {
    	$time = $time == 0 ? time() : $time;
    	
    	list($baseDate, $baseTime) = $this->getBaseDateTimeForecast($time);
    	list($nx, $ny) = $this->getXY($lat, $lon);
    	
    	$request = $this->buildRequest($baseDate, $baseTime, $nx, $ny);
    	
    	$response = $this->getResponseForecast($request);
    	
    	return json_decode($response, true);
    }
    
    /**
    *	request build, numOfRows값이 100정도 되어야 TMX, TMN 값이 들어옴...
    **/
    public function buildRequest($baseDate, $baseTime, $nx, $ny) {
    	$request = array(
    		"serviceKey"=>SERVICE_KEY,
    		"numOfRows"=>100,
    		"pageNo"=>1,
    		"dataType"=>"JSON",
    		"base_date"=>$baseDate,
    		"base_time"=>$baseTime,
    		"nx"=>$nx,
    		"ny"=>$ny
    	);
    	    	
    	return $request;
    }
    
    public function getResponseForecast($request) {
    	$ch = curl_init();
    	
    	$queryParams = $this->buildUrlQuery($request);

		curl_setopt($ch, CURLOPT_URL, WEATHER_URL."?".$queryParams);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_TIMEOUT, 3); // 타임아웃 추가 
		
		$response = curl_exec($ch);
		
		curl_close($ch);
		
		return $response;
    }
    
    public function parseWeather($response, ...$categorys) {
    	$data = array();
    	
    	try {
    	
    		if(isset($response) && isset($response['response']['body']['items']['item'])) {

				$list = $response['response']['body']['items']['item'];
			
				if(isset($list) && count($list)>0) {
		
					foreach($list as $row) {
						foreach($categorys as $category) {
							if($category == $row['category']) {
			
								$data['date'] = $row['baseDate'];
								$date = date_create_from_format('Ymd', $row['baseDate']);
								$data['ts'] = $date->getTimestamp();
				
								list($data['lat'], $data['lon']) = $this->getLatLng($row['nx'], $row['ny']);
							
								switch($category) {
									case "POP": // 강수확률 %
										$data[$category] = $row['fcstValue']."%";
										break;
									case "PTY": // 강수형태 
										$data[$category] = $this->getPTYCode($row['fcstValue']);
										break;
									case "REH": // 습도 %
										$data[$category] = $row['fcstValue']."%";
										break;
									case "SKY": // 하늘상태
										$data[$category] = $this->getSKYCode($row['fcstValue']);
										break;
									case "T3H": // 3시간 기온
										$data[$category] = $row['fcstValue']."℃";
										break;
									case "TMX": // 낮 최고기온
										$data[$category] = $row['fcstValue']."℃";
										break;
									case "UUU": // 풍속(동서성분) m/s
										$data[$category] = $row['fcstValue']."m/s";
										break;
									case "VEC": // 풍향 
										$data[$category] = $this->getWindDirection($row['fcstValue']);
										break;
									case "VVV": // 풍속(남북성분) m/s
										$data[$category] = $row['fcstValue']."m/s";
										break;
									case "WSD": // 풍속
										$data[$category] = $this->getWindSpeed($row['fcstValue']);
										break;
									case "TMN": // 아침 최저기온
										$data[$category] = $row['fcstValue']."℃";
										break;
									case "TMX": // 낮 최고기온
										$data[$category] = $row['fcstValue']."℃";
										break;
									case "R06": // 6시간 강수량
										$data[$category] = $row['fcstValue']."mm";
										break;
									case "S06": // 6시간 적설량
										$data[$category] = $row['fcstValue']."cm";
										break;
									case "T1H": // 1시간 기온
										$data[$category] = $row['fcstValue']."℃";
										break;
									case "RN1": // 1시간 강수량
										$data[$category] = $row['fcstValue']."mm";
										break;
									case "WAV": // 파고 M
										$data[$category] = $row['fcstValue']."M";
										break;
									case "LGT": // 낙뇌
										$data[$category] = $this->getLGTCode($row['fcstValue']);
										break;
								}
			
								break;
							}
						}
					}
				}
			}
    	} catch(exception $e) {
    		
    	}
    	
    	return $data;
    }
    
    public function buildUrlQuery($params) {
		foreach($params as $param => $value) {
		   $paramsJoined[] = "$param=".urlencode($value);
		}

		$query = isset($paramsJoined) ? implode('&', $paramsJoined) : "";
	
		return $query;
	}
    
    public function getBaseDateTimeRealtime($time = 0) {
    	
    	$time = $time == 0 ? time() : $time;
    	
    	$baseDate = date("Ymd", $time);
    	$baseTime = "0030";
    	
    	$h = date("H", $time);
    	$m = date("i", $time);
    	
    	if($h==0 && $m < 30) {
    		$baseDate = date("Ymd", $time-86400);
    		$baseTime = "2330";
    	} else if($m>=30) {
    		$baseTime = sprintf("%02d30", $h);
    	} else {
    		if($h==0) $h=23;
    		else $h = $h - 1;
    		
    		$baseTime = sprintf("%02d30", $h);
    	}
    	
    	return array($baseDate, $baseTime);
    }
    
    public function getBaseDateTimeForecast($time = 0) {
    	
    	$time = $time == 0 ? time() : $time;
    	
    	$baseTime = "2300";
    	$baseDate = date("Ymd", $time);
    	
    	$tm = ceil(date("Hi", $time));
    	
    	if($tm < 205) {
    		$baseDate = date("Ymd", $time-86400);
    	} else if($tm < 505) {
    		$baseTime = "0200";
    	} else if($tm < 805) {
    		$baseTime = "0500";
    	} else if($tm < 1105) {
    		$baseTime = "0800";
    	} else if($tm < 1405) {
    		$baseTime = "1100";
    	} else if($tm < 1705) {
    		$baseTime = "1400";
    	} else if($tm < 2005) {
    		$baseTime = "1700";
    	} else if($tm < 2305) {
    		$baseTime = "2000";
    	}
    	
    	return array($baseDate, $baseTime);
    }
    
    /**
    * RO6
    **/
    public function getRainString($v) {
    	if($v < 0.1) return "&nbsp;";
		else if($v >= 0.1 && $v < 1.0) return "1mm미만";
		else if($v >= 1.0 && $v < 5.0) return "1~4mm";
		else if($v >= 5.0 && $v < 10.0) return "5~9mm";
		else if($v >= 10.0 && $v < 20.0) return "10~19mm";
		else if($v >= 20.0 && $v < 40.0) return "20~39mm";
		else if($v >= 40.0 && $v < 70.0) return "40~69mm";
		else return "70mm이상";
    }
    
    /**
    * PTY
    **/
    public function getPTYCode($code = 0) {
    	$result = "";
    	
    	switch($code) {
    		case "0":
    			$result = "-";
    			break;
    		case "1":
    			$result = "비";
    			break;
    		case "2":
    			$result = "진눈개비";
    			break;
    		case "3":
    			$result = "눈";
    			break;
    		case "4":
    			$result = "소나기";
    			break;
    		case "5":
    			$result = "빗방울";
    			break;
    		case "6":
    			$result = "빗방울/눈날림";
    			break;
    		case "7":
    			$result = "눈날림";
    			break;
    		default:
    			$result = "-";
    			break;
    	}
    	
    	return $result;
    }
    
    /**
    * SKY 하늘
    **/
    public function getSKYCode($code) {
    	$result = "";
    	
    	switch($code) {
    		case "1":
    			$result = "맑음";
    			break;
    		case "3":
    			$result = "구름많음";
    			break;
    		case "4":
    			$result = "흐림";
    			break;
    		default:
    			$result = "-";
    			break;
    	}
    	
    	return $result;
    }
    
    public function getSkyStatus($v) {
    	if($v>=0 && $v<6) return "맑음";
    	else if($v<9) return "구름많음";
    	else if($v<11) return "흐림";
    	else return "";
    }
    
    public function getLGTCode($code) {
    	switch($code) {
    		case "0":
    			return "없음";
    		case "1":
    			return "낮음";
    		case "2":
    			return "보통";
    		case "3":
    			return "높음";
    		default:
    			return "";
    	}
    }
    
    /**
    * WSD 풍속 
    **/
    public function getWindSpeed($v) {
    	if($v<4) return "";	// 약한바람
    	else if($v<9) return "약간강";
    	else if($v<14) return "강";
    	else return "매우강";
    }
    
    /**
    * VEC 풍향
    **/
    public function getWindDirection($v) {
    
    	$seq = ceil(($v + 22.5 * 0.5) / 22.5);
    
    	$windDirection = array("N", "NNE", "NE", "ENE", 
    							"E", "ESE", "SE", "SSE",
    							"S", "SSW", "SW", "WSW",
    							"W", "WNW", "NW", "NNW",
    							"N");
    							
    	$windDirectionString = array("북", "북북동", "북동", "동북동",
    							"동", "동남동", "남동", "남남동",
    							"남", "남남서", "남서", "서남서",
    							"서", "서북서", "북서", "북북서",
    							"북");
    	
    	if($seq < count($windDirection) && $seq >= 0) return array($windDirection[$seq], $windDirectionString[$seq]);
    	else return array("", "");
    }
	
	/**
	* 위경도 -> (X,Y)
	**/
	public function getXY($lat, $lon) {
		$x = 0;
		$y = 0;
		$this->map_conv($lon, $lat, $x, $y, 0, $this->map);
		
		return array($x, $y);
	}
	
	/**
	* (X,Y) -> 위경도
	**/
	public function getLatLng($x, $y) {
		$lat = 0;
		$lon = 0;
		
		if ($x < 1 || $x > XLIMIT || $y < 1 || $y > YLIMIT) {
			return array($lat, $lon);
		}

		$this->map_conv($lon, $lat, $x, $y, 1, $this->map);
		
		return array($lat, $lon);
	}

	public function map_conv(&$lon, &$lat, &$x, &$y, $code, &$map) {

		$lon1 = $lat1 = $x1 = $y1 = 0.0;
	
		switch($code) {
			case 0:
				//
				// 위경도 -> (X,Y)
				//
				$lon1 = $lon;
				$lat1 = $lat;
				$this->lamcproj($lon1, $lat1, $x1, $y1, $code, $map);
				$x = (int)($x1 + 1.5);
				$y = (int)($y1 + 1.5);
				break;
			case 1:
				//
				// (X,Y) -> 위경도
				//
				$x1 = $x - 1;
				$y1 = $y - 1;
				$this->lamcproj($lon1, $lat1, $x1, $y1, $code, $map);
				$lon = $lon1;
				$lat = $lat1;
				break;
		}

	}
	
	public function lamcproj(&$lon, &$lat, &$x, &$y, $code, &$map) {

		$re = $map['Re'] / $map['grid'];
		$slat1 = $map['slat1'] * DEGRAD;
		$slat2 = $map['slat2'] * DEGRAD;
		$olon = $map['olon'] * DEGRAD;
		$olat = $map['olat'] * DEGRAD;

		$sn = tan(PI * 0.25 + $slat2*0.5)/tan(PI * 0.25 + $slat1 * 0.5);
		$sn = log(cos($slat1) / cos($slat2)) / log($sn);
		$sf = tan(PI * 0.25 + $slat1 * 0.5);
		$sf = pow($sf,$sn) * cos($slat1) / $sn;
		$ro = tan(PI * 0.25 + $olat * 0.5);
		$ro = $re * $sf / pow($ro,$sn);
		
		if ($code == 0) {
			$ra = tan(PI * 0.25 + ($lat) * DEGRAD * 0.5);
// 			printf("* ra: %f, theta: %f, PI: %f, DEGRAD: %f\n", $ra, $theta, PI, DEGRAD);
			
			$ra = $re * $sf / pow($ra,$sn);
			$theta = $lon * DEGRAD - $olon;
			if ($theta > PI) $theta -= 2.0 * PI;
			if ($theta < -(PI)) $theta += 2.0 * PI;
			$theta *= $sn;
			$x = (float)($ra * sin($theta)) + $map['xo'];
			$y = (float)($ro - $ra * cos($theta)) + $map['yo'];
			
		} else {
			$xn = $x - $map['xo'];
			$yn = $ro - ($y) + $map['yo'];
			$ra = sqrt($xn * $xn + $yn * $yn);
			if ($sn< 0.0) $ra = -$ra;
			$alat = pow(($re * $sf / $ra),(1.0 / $sn));
			$alat = 2.0 * atan($alat) - PI * 0.5;
			if (abs($xn) <= 0.0) {
				$theta = 0.0;
			} else {
				if (abs($yn) <= 0.0) {
					$theta = PI * 0.5;
					if($xn< 0.0 ) $theta = -$theta;
				} else
					$theta = atan2($xn,$yn);
			}
			$alon = $theta / $sn + $olon;
			
			$lat = $this->round_down((float)($alat * RADDEG), 7);
			$lon = $this->round_down((float)($alon * RADDEG), 7);
		}
	
	}
	
	public function round_up($number, $precision = 2) {
		$fig = (int) str_pad('1', $precision, '0');
		return (ceil($number * $fig) / $fig);
	}

	public function round_down($number, $precision = 2) {
		$fig = (int) str_pad('1', $precision, '0');
		return (floor($number * $fig) / $fig);
	}
}

?>