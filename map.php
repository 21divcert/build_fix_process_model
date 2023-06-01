<?php include './weather.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>어쩌다 제주</title>
    <link rel="stylesheet" type="text/css" href="./css\style.css">
</head>
<body>
    <section class="full">
        <header>
            <p class="logo"><img src="./images/logos.svg"></p>
            <div class="weather">
                <p><img src="<?=$imgSrc?>"></p>
                <p><?=$closestData['temp']."℃"?></p>
            </div>
        </header>
        <div class="main">
            <div class="map_wrap">
            <div class="map_main" id="map" style="width:100%;height:75vh;margin: 0;border-radius: 35px; padding-bottom: 20px; padding-top: 20px;"></div>
                <!--지도 화면-->
                <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=a1bfedfd24ea1a4bf1ad63d174fae802"></script>
                <script>
                    var container = document.getElementById('map');
                    var options = {
                        center: new kakao.maps.LatLng(33.450701, 126.570667),
                        level: 3
                    };
            
                    var map = new kakao.maps.Map(container, options);


                // HTML5의 geolocation으로 사용할 수 있는지 확인합니다 
                if (navigator.geolocation) {
                    
                    // GeoLocation을 이용해서 접속 위치를 얻어옵니다
                    navigator.geolocation.getCurrentPosition(function(position) {
                        
                        var lat = position.coords.latitude, // 위도
                            lon = position.coords.longitude; // 경도
                        
                        var locPosition = new kakao.maps.LatLng(lat, lon), // 마커가 표시될 위치를 geolocation으로 얻어온 좌표로 생성합니다             
                            message = '<div style="padding:현재 나의 위치?!</div>'; // 인포윈도우에 표시될 내용입니다           
                                        
                        // 마커와 인포윈도우를 표시합니다
                        displayMarker(locPosition, message);
                                                            
                      });               
                                    
                } else { // HTML5의 GeoLocation을 사용할 수 없을때 마커 표시 위치와 인포윈도우 내용을 설정합니다
                                    
                                    var locPosition = new kakao.maps.LatLng(33.450701, 126.570667),    
                                        message = 'geolocation을 사용할수 없어요..'
                                                        
                                    displayMarker(locPosition, message);
                }               
                
                // 지도에 마커와 인포윈도우를 표시하는 함수입니다
                function displayMarker(locPosition, message) {
                
                    // 마커를 생성합니다
                    var marker = new kakao.maps.Marker({  
                        map: map, 
                        position: locPosition
                    }); 
                    
                    var iwContent = message, // 인포윈도우에 표시할 내용
                        iwRemoveable = true;
                
                    // 인포윈도우를 생성합니다
                    var infowindow = new kakao.maps.InfoWindow({
                        content : iwContent,
                        removable : iwRemoveable
                    });
                    
                    // 인포윈도우를 마커위에 표시합니다 
                    infowindow.open(map, marker);
                    
                    // 지도 중심좌표를 접속위치로 변경합니다
                    map.setCenter(locPosition);      
                }    
                </script>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer_wrap">
        <ul>
                <li>
                    <a href="..\index.php"><img src="./images/home2.svg"></a>
                </li>
                <li>
                    <a href=".\map.php"><img src="./images/gps.svg"></a>
                </li>
                <li>
                    <a href="./tag.php"><img src="./images/tag.svg"></a>
                </li>
                <li>
                    <a href=""><img src="./images/user.svg"></a>
                </li>
            </ul>
        </div>
    </footer>
</body>
</html>
