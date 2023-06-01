<?php include './weather.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>어쩌다 제주</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <script src="https://developers.kakao.com/sdk/js/kakao.js"></script>
</head>
<link rel="stylesheet" type="text/css" href="css\style.css">
    <section class="full">
        <header>
            <p class="logo"><img src="./images/logos.svg"></p>
            <div class="weather">
                <p><img src="<?=$imgSrc?>"></p>
                <p><?=$closestData['temp']."℃"?></p>
            </div>
        </header>
        <div class="home_page">
            <h1 class="sub_title_text_1">
                #동쪽코스
            </h1>
            <a href = "javascript:void(0)" 
                onclick = "document.getElementById('bus1').style.display='block'; document.getElementById('fade').style.display='block'">
                <div class="bus_select_btn">
                    <div class="bus_select_text">
                        <img src="images\title_logo.png"><div style="color:black"><strong>810</strong></div>
                    </div>
                </div>
            </a>
            <div id="bus1" class="white_content">
                <div class = "bus_stop_close">
                    
                    <a href = "javascript:void(0)" 
                    onclick = "document.getElementById('bus1').style.display='none';
                    document.getElementById('fade').style.display='none'"><input type="button" value="닫기" class="close_btn"></a>
                    <div>&nbsp</div>
                    
                </div>
                <p>BUS 810</p>

                <div class = "bus_location">
                    <div class="map_810">
                        <img src="./images/810.gif">
                    </div>
                    <!--지도-->
                    <div class="bus_time">
                        <ul style="line-height: 2em;">
                            <!--810 버스 노선, 도착 예정 시간-->
                            <div class = "bus_stop_name">
                                <img src ="images\bus_logo.png"class = "busstop_logo">
                                <li style="position:absolute; left:285px;">출발지 & 종점</li>
                                <li class ="bus_stop"><strong>대천환승정류장</strong></li>
                            </div>
                            <img src ="images\bus_line.png"class = "busline_logo">
                            
                            <div class = "bus_stop_name">
                            <img src ="images\bus_logo.png"class = "busstop_logo">
                                <li class="bus_up">n분 전</li> 
                                <li class ="bus_stop"><strong>거슨새미오름, 안돌오름</strong></li>
                                <li class="bus_down">n분 전</li> <br>
                            </div>
                            <img src ="images\bus_line.png"class = "busline_logo">

                            <div class = "bus_stop_name">
                                <img src ="images\bus_logo.png"class = "busstop_logo">
                                <li class="bus_up">n분 전</li> 
                                <li class ="bus_stop"><strong>아부오름 주차장</strong></li>
                                <li class="bus_down">n분 전</li> <br>
                            </div>
                            <img src ="images\bus_line.png"class = "busline_logo">

                            <div class = "bus_stop_name">
                                <img src ="images\bus_logo.png"class = "busstop_logo">
                                <li class="bus_up">n분 전</li> 
                                <li class ="bus_stop"><strong>국립종자원 제주지원</strong></li>
                                <li class="bus_down">n분 전</li> <br>
                            </div>
                            <img src ="images\bus_line.png"class = "busline_logo">

                            <div class = "bus_stop_name">
                                <img src ="images\bus_logo.png"class = "busstop_logo">
                                <li class="bus_up">n분 전</li> 
                                <li class ="bus_stop"><strong>송당리 마을</strong></li>
                                <li class="bus_down">n분 전</li> <br>
                            </div>
                            <img src ="images\bus_line.png"class = "busline_logo">

                            <div class = "bus_stop_name">
                                <img src ="images\bluebus_logo.png"class = "busstop_logo">
                                <li class="bus_up">n분 전</li> 
                                <li class ="bus_stop"><strong>다랑쉬오름 입구(남), 손지오름</strong></li>
                                <li class="bus_down">n분 전</li> <br>
                            </div>
                            <img src ="images\bluebus_line.png"class = "busline_logo">

                            <div class = "bus_stop_name">
                                <img src ="images\bus_logo.png"class = "busstop_logo">
                                <li class="bus_up">n분 전</li> 
                                <li class ="bus_stop"><strong>용눈이오름</strong></li>
                                <li class="bus_down">n분 전</li> <br>
                            </div>
                            <img src ="images\bus_line.png"class = "busline_logo">

                            <div class = "bus_stop_name">
                                <img src ="images\bus_logo.png"class = "busstop_logo">
                                <li class="bus_up">n분 전</li> 
                                <li class ="bus_stop"><strong>제주레일바이크</strong></li>
                                <li class="bus_down">n분 전</li> <br>
                            </div>
                            <img src ="images\bus_line.png"class = "busline_logo">

                            <div class = "bus_stop_name">
                                <img src ="images\bus_logo.png"class = "busstop_logo">
                                <li class="bus_up">n분 전</li> 
                                <li class ="bus_stop"><strong>다랑쉬오름 입구(북)</strong></li>
                                <li class="bus_down">n분 전</li> <br>
                            </div>
                            <img src ="images\bus_line.png"class = "busline_logo">

                            <div class = "bus_stop_name">
                                <img src ="images\bus_logo.png"class = "busstop_logo">
                                <li class="bus_up">n분 전</li> 
                                <li class ="bus_stop"><strong>비자림</strong></li>
                                <li class="bus_down">n분 전</li> <br>
                            </div>
                            <img src ="images\bus_line.png"class = "busline_logo">

                            <div class = "bus_stop_name">
                                <img src ="images\bus_logo.png"class = "busstop_logo">
                                <li class="bus_up">n분 전</li> 
                                <li class ="bus_stop"><strong>메이즈랜드</strong></li>
                                <li class="bus_down">n분 전</li> <br>
                            </div>
                            <img src ="images\bus_line.png"class = "busline_logo">

                            <div class = "bus_stop_name">
                                <img src ="images\bus_logo.png"class = "busstop_logo">
                                <li class="bus_up">n분 전</li> 
                                <li class ="bus_stop"><strong>둔지오름</strong></li>
                                <li class="bus_down">n분 전</li> <br>
                            </div>
                            <img src ="images\bus_line.png"class = "busline_logo">

                            <div class = "bus_stop_name">
                                <img src ="images\bus_logo.png"class = "busstop_logo">
                                <li class="bus_up">n분 전</li> 
                                <li class ="bus_stop"><strong>덕천리</strong></li>
                                <li class="bus_down">n분 전</li> <br>
                            </div>
                            <img src ="images\bus_line.png"class = "busline_logo">

                            <div class = "bus_stop_name">
                                <img src ="images\bus_logo.png"class = "busstop_logo">
                                <li class="bus_up">n분 전</li> 
                                <li class ="bus_stop"><strong>어대오름</strong></li>
                                <li class="bus_down">n분 전</li> <br>
                            </div>
                            <img src ="images\bus_line.png"class = "busline_logo">

                            <div class = "bus_stop_name">
                                <img src ="images\bus_logo.png"class = "busstop_logo">
                                <li class="bus_up">n분 전</li> 
                                <li class ="bus_stop"><strong>한울랜드</strong></li>
                                <li class="bus_down">n분 전</li> <br>
                            </div>
                            <img src ="images\bus_line.png"class = "busline_logo">

                            <div class = "bus_stop_name">
                                <img src ="images\bus_logo.png"class = "busstop_logo">
                                <li class="bus_up">n분 전</li> 
                                <li class ="bus_stop"><strong>송당리 마을</strong></li>
                                <li class="bus_down">n분 전</li> <br>
                            </div>
                            <img src ="images\bus_line.png"class = "busline_logo">

                            <div class = "bus_stop_name">
                                <img src ="images\bus_logo.png"class = "busstop_logo">
                                <li class="bus_up">n분 전</li> 
                                <li class ="bus_stop"><strong>국가위성운영센터</strong></li>
                                <li class="bus_down">n분 전</li> <br>
                            </div>
                            <img src ="images\bus_line.png"class = "busline_logo">

                            <div class = "bus_stop_name">
                                <img src ="images\bus_logo.png"class = "busstop_logo">
                                <li class="bus_up">n분 전</li> 
                                <li class ="bus_stop"><strong>동백동산 습지센터</strong></li>
                                <li class="bus_down">n분 전</li> <br>
                            </div>
                            <img src ="images\bus_line.png"class = "busline_logo">

                            <div class = "bus_stop_name">
                                <img src ="images\bus_logo.png"class = "busstop_logo">
                                <li class="bus_up">n분 전</li> 
                                <li class ="bus_stop"><strong>알밤오름</strong></li>
                                <li class="bus_down">n분 전</li> <br>
                            </div>
                            <img src ="images\bus_line.png"class = "busline_logo">

                            <div class = "bus_stop_name">
                                <img src ="images\bus_logo.png"class = "busstop_logo">
                                <li class="bus_up">n분 전</li> 
                                <li class ="bus_stop"><strong>다희연</strong></li>
                                <li class="bus_down">n분 전</li> <br>
                            </div>
                            <img src ="images\bus_line.png"class = "busline_logo">

                            <div class = "bus_stop_name">
                                <img src ="images\bus_logo.png"class = "busstop_logo">
                                <li class="bus_up">n분 전</li> 
                                <li class ="bus_stop"><strong>선인동</strong></li>
                                <li class="bus_down">n분 전</li> <br>
                            </div>
                            <img src ="images\bus_line.png"class = "busline_logo">

                            <div class = "bus_stop_name">
                                <img src ="images\bus_logo.png"class = "busstop_logo">
                                <li class="bus_up">n분 전</li> 
                                <li class ="bus_stop"><strong>선녀와 나무꾼</strong></li>
                                <li class="bus_down">n분 전</li> <br>
                            </div>
                            <img src ="images\bus_line.png"class = "busline_logo">

                            <div class = "bus_stop_name">
                                <img src ="images\bus_logo.png"class = "busstop_logo">
                                <li class="bus_up">n분 전</li> 
                                <li class ="bus_stop"><strong>선흘2리/양잠단지</strong></li>
                                <li class="bus_down">n분 전</li> <br>
                            </div>
                            <img src ="images\bus_line.png"class = "busline_logo">

                            <div class = "bus_stop_name">
                                <img src ="images\bus_logo.png"class = "busstop_logo">
                                <li class="bus_up">n분 전</li> 
                                <li class ="bus_stop"><strong>제주세계자연유산센터입구</strong></li>
                                <li class="bus_down">n분 전</li> <br>
                            </div>
                            <img src ="images\bus_line.png"class = "busline_logo">

                            <div class = "bus_stop_name">
                                <img src ="images\bus_logo.png"class = "busstop_logo">
                                <li class="bus_up">n분 전</li> 
                                <li class ="bus_stop"><strong>제주세계자연유산센터입구 거문오름</strong></li>
                                <li class="bus_down">n분 전</li> <br>
                            </div>
                            <img src ="images\redbus_line.png"class = "busline_logo">

                            <div class = "bus_stop_name">
                                <img src ="images\redbus_logo.png"class = "busstop_logo">
                                <li  style = "position:absolute; left:285px;">출발지 & 종점</li>
                                <li class ="bus_stop""><strong>대천환승정류장</strong></li>
                                

                            </div>
                        </ul>
                    </div>
                </div>
            </div>
                    <div id="fade" class="black_overlay"></div>
                
            <h1 class="sub_title_text_2">
                #서쪽코스
            </h1>
            <a href = "javascript:void(0)" 
                onclick = "document.getElementById('bus2').style.display='block'; document.getElementById('fade').style.display='block'">
                <div class="bus_select_btn">
                    <div class="bus_select_text">
                        <img src="images\title_logo.png"><div style="color:black"><strong>820</strong></div>
                    </div>
                </div>
            </a>
                <div id="bus2" class="white_content">
                    <div class = "bus_stop_close">
                        <a href = "javascript:void(0)" 
                        onclick = "document.getElementById('bus2').style.display='none';
                        document.getElementById('fade').style.display='none'"><input type="button" value="닫기" class="close_btn"></a>
                        <div>&nbsp</div>
                    </div>
                    <p>BUS 820</p>
                    <div class = "bus_location">
                        <div class="map_810">
                        <img src="./images/820.gif">
                        </div>
                        <div class="bus_time">
                            <ul style="line-height: 2em;">
                                <!--820 버스 노선, 도착 예정 시간-->
                                <div class = "bus_stop_name">
                                    <img src ="images\bus_logo.png"class = "busstop_logo">
                                    <li style="position:absolute; left:285px;">출발지 & 종점</li>
                                    <li class ="bus_stop"><strong>동광환승정류장</strong></li>
                                </div>
                                <img src ="images\bus_line.png"class = "busline_logo">
                                
                                <div class = "bus_stop_name">
                                <img src ="images\bus_logo.png"class = "busstop_logo">
                                    <li class="bus_up">n분 전</li> 
                                    <li class ="bus_stop" style="top:-18px"><strong>테디밸리 골프앤리조트,<br>헬로키티 아일랜드</strong></li>
                                    <li class="bus_down">n분 전</li> <br>
                                </div>
                                <img src ="images\bus_line.png"class = "busline_logo">

                                <div class = "bus_stop_name">
                                    <img src ="images\bus_logo.png"class = "busstop_logo">
                                    <li class="bus_up">n분 전</li> 
                                    <li class ="bus_stop"><strong>세계자동차 피아노박물관</strong></li>
                                    <li class="bus_down">n분 전</li> <br>
                                </div>
                                <img src ="images\bus_line.png"class = "busline_logo">

                                <div class = "bus_stop_name">
                                    <img src ="images\bus_logo.png"class = "busstop_logo">
                                    <li class="bus_up">n분 전</li> 
                                    <li class ="bus_stop"><strong>서광동보건진료소</strong></li>
                                    <li class="bus_down">n분 전</li> <br>
                                </div>
                                <img src ="images\bus_line.png"class = "busline_logo">

                                <div class = "bus_stop_name">
                                    <img src ="images\bus_logo.png"class = "busstop_logo">
                                    <li class="bus_up">n분 전</li> 
                                    <li class ="bus_stop"><strong>소인국테마파크</strong></li>
                                    <li class="bus_down">n분 전</li> <br>
                                </div>
                                <img src ="images\bus_line.png"class = "busline_logo">

                                <div class = "bus_stop_name">
                                    <img src ="images\bluebus_logo.png"class = "busstop_logo">
                                    <li class="bus_up">n분 전</li> 
                                    <li class ="bus_stop"><strong>서광서리</strong></li>
                                    <li class="bus_down">n분 전</li> <br>
                                </div>
                                <img src ="images\bluebus_line.png"class = "busline_logo">

                                <div class = "bus_stop_name">
                                    <img src ="images\bus_logo.png"class = "busstop_logo">
                                    <li class="bus_up">n분 전</li> 
                                    <li class ="bus_stop"><strong>노리매</strong></li>
                                    <li class="bus_down">n분 전</li> <br>
                                </div>
                                <img src ="images\bus_line.png"class = "busline_logo">

                                <div class = "bus_stop_name">
                                    <img src ="images\bus_logo.png"class = "busstop_logo">
                                    <li class="bus_up">n분 전</li> 
                                    <li class ="bus_stop"><strong>구억리</strong></li>
                                    <li class="bus_down">n분 전</li> <br>
                                </div>
                                <img src ="images\bus_line.png"class = "busline_logo">

                                <div class = "bus_stop_name">
                                    <img src ="images\bus_logo.png"class = "busstop_logo">
                                    <li class="bus_up">n분 전</li> 
                                    <li class ="bus_stop"><strong>신평리</strong></li>
                                    <li class="bus_down">n분 전</li> <br>
                                </div>
                                <img src ="images\bus_line.png"class = "busline_logo">

                                <div class = "bus_stop_name">
                                    <img src ="images\bus_logo.png"class = "busstop_logo">
                                    <li class="bus_up">n분 전</li> 
                                    <li class ="bus_stop"><strong>인향동</strong></li>
                                    <li class="bus_down">n분 전</li> <br>
                                </div>
                                <img src ="images\bus_line.png"class = "busline_logo">

                                <div class = "bus_stop_name">
                                    <img src ="images\bus_logo.png"class = "busstop_logo">
                                    <li class="bus_up">n분 전</li> 
                                    <li class ="bus_stop"><strong>산양 큰엉곶 입구</strong></li>
                                    <li class="bus_down">n분 전</li> <br>
                                </div>
                                <img src ="images\bus_line.png"class = "busline_logo">

                                <div class = "bus_stop_name">
                                    <img src ="images\bus_logo.png"class = "busstop_logo">
                                    <li class="bus_up">n분 전</li> 
                                    <li class ="bus_stop"><strong>제주평화박물관</strong></li>
                                    <li class="bus_down">n분 전</li> <br>
                                </div>
                                <img src ="images\bus_line.png"class = "busline_logo">

                                <div class = "bus_stop_name">
                                    <img src ="images\bus_logo.png"class = "busstop_logo">
                                    <li class="bus_up">n분 전</li> 
                                    <li class ="bus_stop"><strong>청수마을회관</strong></li>
                                    <li class="bus_down">n분 전</li> <br>
                                </div>
                                <img src ="images\bus_line.png"class = "busline_logo">

                                <div class = "bus_stop_name">
                                    <img src ="images\bus_logo.png"class = "busstop_logo">
                                    <li class="bus_up">n분 전</li> 
                                    <li class ="bus_stop"><strong>청수리사거리</strong></li>
                                    <li class="bus_down">n분 전</li> <br>
                                </div>
                                <img src ="images\bus_line.png"class = "busline_logo">

                                <div class = "bus_stop_name">
                                    <img src ="images\bus_logo.png"class = "busstop_logo">
                                    <li class="bus_up">n분 전</li> 
                                    <li class ="bus_stop"><strong>저지리사무소</strong></li>
                                    <li class="bus_down">n분 전</li> <br>
                                </div>
                                <img src ="images\bus_line.png"class = "busline_logo">

                                <div class = "bus_stop_name">
                                    <img src ="images\bus_logo.png"class = "busstop_logo">
                                    <li class="bus_up">n분 전</li> 
                                    <li class ="bus_stop"><strong>제주현대미술관, 김창열미술관</strong></li>
                                    <li class="bus_down">n분 전</li> <br>
                                </div>
                                <img src ="images\bus_line.png"class = "busline_logo">

                                <div class = "bus_stop_name">
                                    <img src ="images\bus_logo.png"class = "busstop_logo">
                                    <li class="bus_up">n분 전</li> 
                                    <li class ="bus_stop"><strong>방림원</strong></li>
                                    <li class="bus_down">n분 전</li> <br>
                                </div>
                                <img src ="images\bus_line.png"class = "busline_logo">

                                <div class = "bus_stop_name">
                                    <img src ="images\bus_logo.png"class = "busstop_logo">
                                    <li class="bus_up">n분 전</li> 
                                    <li class ="bus_stop"><strong>생각하는정원</strong></li>
                                    <li class="bus_down">n분 전</li> <br>
                                </div>
                                <img src ="images\bus_line.png"class = "busline_logo">

                                <div class = "bus_stop_name">
                                    <img src ="images\bus_logo.png"class = "busstop_logo">
                                    <li class="bus_up">n분 전</li> 
                                    <li class ="bus_stop"><strong>환상숲곶자왈공원</strong></li>
                                    <li class="bus_down">n분 전</li> <br>
                                </div>
                                <img src ="images\bus_line.png"class = "busline_logo">

                                <div class = "bus_stop_name">
                                    <img src ="images\bus_logo.png"class = "busstop_logo">
                                    <li class="bus_up">n분 전</li> 
                                    <li class ="bus_stop"><strong>제주유리의성</strong></li>
                                    <li class="bus_down">n분 전</li> <br>
                                </div>
                                <img src ="images\bus_line.png"class = "busline_logo">

                                <div class = "bus_stop_name">
                                    <img src ="images\bus_logo.png"class = "busstop_logo">
                                    <li class="bus_up">n분 전</li> 
                                    <li class ="bus_stop"><strong>제주오설록 티뮤지엄</strong></li>
                                    <li class="bus_down">n분 전</li> <br>
                                </div>
                                <img src ="images\bus_line.png"class = "busline_logo">

                                <div class = "bus_stop_name">
                                    <img src ="images\bus_logo.png"class = "busstop_logo">
                                    <li class="bus_up">n분 전</li> 
                                    <li class ="bus_stop"><strong>제주항공우주호텔</strong></li>
                                    <li class="bus_down">n분 전</li> <br>
                                </div>
                                <img src ="images\bus_line.png"class = "busline_logo">

                                <div class = "bus_stop_name">
                                    <img src ="images\bus_logo.png"class = "busstop_logo">
                                    <li class="bus_up">n분 전</li> 
                                    <li class ="bus_stop"><strong>제주항공우주박물관</strong></li>
                                    <li class="bus_down">n분 전</li> <br>
                                </div>
                                <img src ="images\bus_line.png"class = "busline_logo">

                                <div class = "bus_stop_name">
                                    <img src ="images\bus_logo.png"class = "busstop_logo">
                                    <li class="bus_up">n분 전</li> 
                                    <li class ="bus_stop"><strong>제주신화월드 소방서</strong></li>
                                    <li class="bus_down">n분 전</li> <br>
                                </div>
                                <img src ="images\bus_line.png"class = "busline_logo">

                                <div class = "bus_stop_name">
                                    <img src ="images\bus_logo.png"class = "busstop_logo">
                                    <li class="bus_up">n분 전</li> 
                                    <li class ="bus_stop"><strong>신화월드리조트</strong></li>
                                    <li class="bus_down">n분 전</li> <br>
                                </div>
                                <img src ="images\redbus_line.png"class = "busline_logo">
                                
                                <div class = "bus_stop_name">
                                    <img src ="images\bus_logo.png"class = "busstop_logo">
                                    <li class="bus_up">n분 전</li> 
                                    <li class ="bus_stop"><strong>삼밭구석 입구</strong></li>
                                    <li class="bus_down">n분 전</li> <br>
                                </div>
                                <img src ="images\redbus_line.png"class = "busline_logo">

                                <div class = "bus_stop_name">
                                    <img src ="images\redbus_logo.png"class = "busstop_logo">
                                    <li  style = "position:absolute; left:285px;">출발지 & 종점</li>
                                    <li class ="bus_stop""><strong>동광환승정류장</strong></li>
                                    
                            </ul>
                        </div>
                    </div>
                </div>
                    <div id="fade" class="black_overlay"></div>
            </div>
        </div>
        <div class="footer">
            <ul>
                <li class="tap_menu"><a href="..\index.php"><img src="..\images\home2.svg"></a></li>
                <li class="tap_menu"><a href=".\map/map.php"><img src="..\images\gps.svg"></a></li>
                <li class="tap_menu"><a href="./tag/tag.php"><img src="..\images\tag.svg"></a></li>
                <li class="tap_menu"><a href=""><img src="..\images\user.svg"></a></li>
            </ul>
        </div>
    </body>
</html>

