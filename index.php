<?php
    session_start();
    if(!isset($_SESSION["user_id"])){
?>
        <script>
            alert("로그인 후 이용해주세요.");
            location.href='./login/login.php';
        </script>
<?php
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>어쩌다 제주</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <script src="https://developers.kakao.com/sdk/js/kakao.js"></script>
</head>
<link rel="stylesheet" type="text/css" href="css\style.css">
<body style="background-color:#FFA500; overflow: hidden;">
        <div style="display:flex;">
            <p><img src="images\title_logo1.png" class="title_logo"></p>
        </div>
        <div class="home_page">
            <h1 class="sub_title_text">
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
            <div id="bus1" class="white_content">Bus 810
                <a href = "javascript:void(0)" 
                onclick = "document.getElementById('bus1').style.display='none';
                document.getElementById('fade').style.display='none'"><input type="button" value="닫기" class="close_btn"></a>
                <div>&nbsp</div>
                <div style="background-color:black; border-radius:20px; width: 100%; height: 60%;"><!--지도--></div>
                <div class="bus_time">
                    <ul style="line-height: 2em;">
                        <!--810 버스 노선, 도착 예정 시간-->
                        <li style="float: right;">출발지 & 종점</li><li><strong>대천환승정류장</strong></li>
                        <li class="bus_up">n분 전</li> 
                        <li><strong>거슨새미오름, 안돌오름</strong></li>
                        <li class="bus_down">n분 전</li> <br>
                        <li class="bus_up">n분 전</li> 
                        <li><strong>아부오름 주차장</strong></li>
                        <li class="bus_down">n분 전</li> <br>
                        <li class="bus_up">n분 전</li> 
                        <li><strong>국립종자원 제주지원</strong></li>
                        <li class="bus_down">n분 전</li> <br>
                        <li class="bus_up">n분 전</li> 
                        <li><strong>송당리 마을</strong></li>
                        <li class="bus_down">n분 전</li> <br>
                    </ul>
                </div>
            </div>
                    <div id="fade" class="black_overlay"></div>
                
            <h1 class="sub_title_text">
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
                <div id="bus2" class="white_content">Bus 820
                    <a href = "javascript:void(0)" 
                    onclick = "document.getElementById('bus2').style.display='none';
                    document.getElementById('fade').style.display='none'"><input type="button" value="닫기" class="close_btn"></a>
                    <div>&nbsp</div>
                    <div style="background-color:black; border-radius:20px; width: 100%; height: 40%;"><!--지도--></div>
                    <div class="bus_time">
                        <ul style="line-height: 2em;">
                            <!--820 버스 노선, 도착 예정 시간-->
                            <li style="float: right;">출발지 & 종점</li><li><strong>동광환승정류장</strong></li>
                            <li class="bus_up">n분 전</li> 
                            <li><strong>테디밸리 골프앤리조트, 헬로키티 아일랜드</strong></li>
                            <li class="bus_down">n분 전</li> <br>
                            <li class="bus_up">n분 전</li> 
                            <li><strong>세계자동차 피아노박물관</strong></li>
                            <li class="bus_down">n분 전</li> <br>
                            <li class="bus_up">n분 전</li> 
                            <li><strong>서광동보건진료소</strong></li>
                            <li class="bus_down">n분 전</li> <br>
                            <li class="bus_up">n분 전</li> 
                            <li><strong>소인국테마파크</strong></li>
                            <li class="bus_down">n분 전</li> <br>
                        </ul>
                    </div>
                </div>
                    <div id="fade" class="black_overlay"></div>
                
            </div>
        </div>
        <div class="footer">
            <ul>
                <li class="tap_menu"><a href=""><img src="images\Home2.png"></a></li>
                <li class="tap_menu"><a href="map\map.php"><img src="images\Explore.png"></a></li>
                <li class="tap_menu"><a href=""><img src="images\Frame.png"></a></li>
                <li class="tap_menu"><a href=""><img src="images\Icon.png"></a></li>
            </ul>
        </div>
    </body>
</html>