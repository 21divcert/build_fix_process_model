<?php include './weather.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>어쩌다 제주</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<script type = "text/javascript" src = "http://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="./tag.js"></script>

</head>
<body>
    <div class="tour_info" style="display: none;">
        <div class="tour_wrap">
            <div class="tour_img">
                <img src="https://api.cdn.visitjeju.net/photomng/imgpath/201804/30/638ee335-0363-4036-bba8-0a7ce6d5f10b.jpg">
            </div>
            <div class="tour_title">
                <p class="tour_name">제주어울림감귤체험농장</p>
                <p class="tour_loc">제주특별자치도 서귀포시 성산읍 수산리 1948</p>
                <p class="tour_info_text">5월 5일까지 연장된 '사회적 거리두기'로 가고 싶은 곳, 하고 싶은 것들이 점점 늘어간다. 오랫동안 보지 못한 친구도 만나고 싶고, 답답한 실내에서 벗어나 탁 트인 자연을 느끼고픈 마음. 이 모든 걸 아우르는 게 결국 '여행' 아닐까? 한 설문에 따르면 코로나19가 종식되면 가장 하고 싶은 일 1위가 국내여행이고, 여행지에서 가고 싶은 곳 1위는 바다, 산과 같은 자연, 2위는 공원, 수목원, 그 뒤로 낚시, 캠핑과 같은 레저 활동이라는 답변이 이어졌다. 마음껏 밖을 나서도 될 그날이 오면 언제든 떠날 수 있도록, 랜선으로 미리 보며 여행을 계획해보면 어떨까? 영상이 플레이되는 동안 마음은 이미 제주에 다다를지도 모른다. </p>
            </div>
            <div class="tour_close_btn">
                <p>닫기</p>
            </div>
        </div>
    </div>
    <section class="full">
        <header>
            <p class="logo"><img src="./images/logos.svg"></p>
            <div class="weather">
                <p><img src="<?=$imgSrc?>"></p>
                <p><?=$closestData['temp']."℃"?></p>
            </div>
        </header>

        <div class="main">
            <div class = "main_wrap" style="width:100%!important">
                <div class ="title2">
                    <p><span><img src="./images/location.png"></span><p>추천 관광지</p></p>
                </div>
                <div class="tag_search">
                    <div class="tag_search_area">
                        <p class="tag_search_title">#태그</p>
                        <ul class="tag_search_list">
                            <?php include"./lib/tag_list.php";?>
                        </ul>
                    </div>
                </div>
                <div class="list_wrap">
                    <ul>
                        <?php include"./lib/item_list.php";?>
                        <!-- <li>
                            <div class="list_box">
                                <div class="list_img">
                                    <img src="https://api.cdn.visitjeju.net/photomng/imgpath/202304/25/94d6d72f-eb14-4626-912f-2818a5bba4d3.png">    
                                </div>
                                <div class="list_text">
                                    <p class="list_title">선녀와 나무꾼 테마공원</p>
                                    <div class="location_text">
                                        <p><img src="./images/location.png"></p>
                                        <p>제주시 조천읍 선교로 267</p>
                                    </div>
                                    <div class="tag_area">
                                        <ul class="tag_list">
                                            <li><p>#활동적인</p></li>
                                            <li><p>#활동적인</p></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li> -->
                    </ul>
                </div>
            </div>

            <div id="popup" class="popup_white_content">
                    <div class = "intro_title">
                        <div class = "btn_intro_close">
                            <input type="button" value="닫기" class="close_btn">
                        </div>
                        <p>이름</p>

                    </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer_wrap">
            <ul>
                <li>
                    <a href="./index.php"><img src="./images/home.svg"></a>
                </li>
                <li>
                    <a href="./map.php"><img src="./images/gps.svg"></a>
                </li>
                <li>
                    <a href="./tag.php?tag=축제/행사"><img src="./images/tag2.svg"></a>
                </li>
                <li>
                    <a href="./mypage.php"><img src="./images/user.svg"></a>
                </li>
            </ul>
        </div>
    </footer>
    <script type="text/javascript" src="./lib/tag.js"></script>
</body>
</html>