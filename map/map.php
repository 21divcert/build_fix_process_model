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
            <div class="map_main">
                <!--지도 화면-->
                <div id="map" style="width:500px;height:400px;"></div>
                <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=9be8de46cc892ba13e3d93b26b3600ad"></script>
                <script>
                    var container = document.getElementById('map');
                    var option = {
                        center : new kakao.maps.LatLng(33.450701, 126.570667),
                        level: 3
                    };

                    var map = new kakao.maps.Map(container, options);
                </script>
            </div>
        </div>
        <div class="footer">
            <ul>
                <li class="tap_menu"><a href="..\index.php"><img src="..\images\Home.png"></a></li>
                <li class="tap_menu"><a href=""><img src="..\images\Explore2.png"></a></li>
                <li class="tap_menu"><a href=""><img src="..\images\Frame.png"></a></li>
                <li class="tap_menu"><a href=""><img src="..\images\Icon.png"></a></li>
            </ul>
        </div>
    </body>
</html>
