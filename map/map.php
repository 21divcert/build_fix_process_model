<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>어쩌다 제주</title>
</head>
<link rel="stylesheet" type="text/css" href="..\css\style.css">
    <body style="background-color:#FFA500; overflow: hidden;">
        <div style="display:flex;">
            <p><img src="..\images\title_logo1.png" class="title_logo"></p>
        </div>
        <div class="home_page">
            <div class="map_wrap">
            <div class="map_main"  id="map" style="width:100%;height:100%;margin: 0;border-radius: 35px; padding-bottom: 20px; padding-top: 20px;"></div>
                <!--지도 화면-->
                <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=a1bfedfd24ea1a4bf1ad63d174fae802"></script>
                <script>
                    var container = document.getElementById('map');
                    var options = {
                        center: new kakao.maps.LatLng(33.450701, 126.570667),
                        level: 3
                    };
            
                    var map = new kakao.maps.Map(container, options);
                </script>
            </div>
        </div>
        <div class="footer">
            <ul>
                <li class="tap_menu"><a href="..\index.php"><img src="..\images\Home2.png"></a></li>
                <li class="tap_menu"><a href=""><img src="..\images\Explore.png"></a></li>
                <li class="tap_menu"><a href=""><img src="..\images\Frame.png"></a></li>
                <li class="tap_menu"><a href=""><img src="..\images\Icon.png"></a></li>
            </ul>
        </div>
    </body>
</html>


