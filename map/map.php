<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>어쩌다 제주</title>
</head>
<link rel="stylesheet" type="text/css" href="..\css\style.css">
    <body style="background-color:#FFA500;">
        <div style="display:flex;">
            <p><img src="..\images\title_logo1.png" class="title_logo"></p>
        </div>
        <div class="home_page">
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

                if(navigator.geolocation){

                    navigator.geolocation.getCurrentPosition(function(position)){

                        var lat = position.coords.latitude, //위도
                            lon = position.coords.longitude; //경도

                        var locPosition = new kakao.maps.LatLng(lat, lon), 
                            message = '<div style="padding:5px;">나의 위치</div>';

                        //마커와 인포윈도우를 표시합니다
                        displayMarker(locPosition, message);

                    }
    
                } 
                    else { // HTML5의 GeoLocation을 사용할 수 없을때 마커 표시 위치와 인포윈도우 내용을 설정합니다
    
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
        <div class="footer">
            <ul>
                <li class="tap_menu"><a href="..\index.php"><img src="..\images\home.svg"></a></li>
                <li class="tap_menu"><a href=""><img src="..\images\gps2.svg"></a></li>
                <li class="tap_menu"><a href=""><img src="..\images\tag.svg"></a></li>
                <li class="tap_menu"><a href=""><img src="..\images\user.svg"></a></li>
            </ul>
        </div>
    </body>
</html>


