<?php include './weather.php'; ?>
<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>어쩌다 제주</title>
        <link rel="stylesheet" type="text/css" href="./css/style.css">
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

                </div>
            </div>
        </section>
        <footer>
            <div class="footer_wrap">
                <ul>
                    <li>
                        <a href="..\index.php"><img src="./images/home.svg"></a>
                    </li>
                    <li>
                        <a href=".\map.php"><img src="./images/gps.svg"></a>
                    </li>
                    <li>
                        <a href="./tag.php"><img src="./images/tag.svg"></a>
                    </li>
                    <li>
                        <a href="./mypage.php"><img src="./images/user2.svg"></a>
                    </li>
                </ul>
            </div>
        </footer>
    </body>
</html>