<?php include './weather.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>홈 페이지 틀 수정</title>
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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
            <div class="main_wrap">
                <div class="title">
                    <p>#동쪽 코스</p>
                </div>
                <ul class="bus_list">
                    <li class="bus">
                        <div class="bus_wrap">
                            <div class="bus_logo">
                                <img src="./images/title_logo.png">
                            </div>
                            <div class="bus_text">
                                <p>810 - 1 </p>
                                <p>거슨세미오름 방향</p>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="title">
                    <p>#서쪽 코스</p>
                </div>
                <ul class="bus_list">
                    <li class="bus">
                        <div class="bus_wrap">
                            <div class="bus_logo">
                                <img src="./images/title_logo.png">
                            </div>
                            <div class="bus_text">
                                <p>820 - 1 </p>
                                <p>거슨세미오름 방향</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer_wrap">
            <ul>
                <li>
                    <a href=""><img src="./images/home2.svg"></a>
                </li>
                <li>
                    <a href=""><img src="./images/gps.svg"></a>
                </li>
                <li>
                    <a href=""><img src="./images/tag.svg"></a>
                </li>
                <li>
                    <a href=""><img src="./images/user.svg"></a>
                </li>
            </ul>
        </div>
    </footer>
</body>
</html>