<?php

function file_get_contents_curl($url) {
    $ch = curl_init();// curl 리소스를 초기화
    curl_setopt($ch, CURLOPT_URL, $url); // url을 설정
    // 헤더는 제외하고 content 만 받음
    curl_setopt($ch, CURLOPT_HEADER, 0);
    // 응답 값을 브라우저에 표시하지 말고 값을 리턴
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $data = curl_exec($ch);
    curl_close($ch);// 리소스 해제를 위해 세션 연결 닫음
    return $data;
}



$url = "https://www.kma.go.kr/wid/queryDFS.jsp?gridx=53&gridy=38";

$xml_string = file_get_contents_curl($url);

$xml = simplexml_load_string($xml_string);

$json = json_encode($xml); // XML to JSON

$R = json_decode($json,TRUE);//배열로 변환

$wData = $R['body']['data'][0];
if(empty($wData)){
    header("Location:./index.php");
}

    date_default_timezone_set('Asia/Seoul');
    $currentHour = date('H');
    $closestHour = $R['body']['data'][0]['hour'];
    $closestData = $R['body']['data'][0];
    foreach($R['body']['data'] as $wData){
        if (abs($currentHour - $wData['hour']) < abs($currentHour - $closestHour)) {
            $closestHour = $wData['hour'];
            $closestData = $wData;
        }
    }
    $imgSrc = "";
    switch ($closestData['wfKor']) {
        case "비":
            $imgSrc = "./images/rain.svg";
            break;
        case "흐림":
            $imgSrc = "./images/cloud.svg";
            break;
        default:
            $imgSrc = "./images/sun.svg";
    }
?> 