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
            <div class="bus_select_btn">
                <div class="bus_select_text">
                    <img src="images\title_logo.png"><div><strong>810</strong></div>
                </div>
            </div>
            <h1 class="sub_title_text">
                #서쪽코스
            </h1>
            <div class="bus_select_btn">
                <div class="bus_select_text">
                    <img src="images\title_logo.png"><div><strong>820</strong></div>
                </div>
            </div>
        </div>
        <div class="footer">
            <ul>
                <li class="tap_menu"><a href=""><img src="images\Home2.png"></a></li>
                <li class="tap_menu"><a href=""><img src="images\Explore.png"></a></li>
                <li class="tap_menu"><a href=""><img src="images\Frame.png"></a></li>
                <li class="tap_menu"><a href=""><img src="images\Icon.png"></a></li>
            </ul>
        </div>
    </body>
</html>