<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>어쩌다 제주</title>
</head>
<body>
    <div id="map" style="width:500px;height:400px;"></div>
    <script type="text/javascript" src="a1bfedfd24ea1a4bf1ad63d174fae802"></script>
    <script>
        var container = document.getElementById('map');
        var option = {
            center : new kakao.maps.LatLng(33.450701, 126.570667),
            level: 3
        };

        var map = new kakao.maps.Map(container, options);
    </script>
</body>
</html>