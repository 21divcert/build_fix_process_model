
<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "3220";
    $dbname = "ajdb";

    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT thumbnailpath, title, adress, tag FROM visitjeju";
    

    
?>
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
    <section class="full">
        <header>
            <p class="logo"><img src="./images/logos.svg"></p>
            <div class="weather">
                <p><img src="<?=$imgSrc?>"></p>
                <p><?=$closestData['temp']."℃"?></p>
            </div>
        </header>

        <div class="main">
            <div class = "main_wrap">

                <div class="title">
                    <p># 태그 선택</p>  
                </div>
                <div class = "HashTag">
                    <ul>
                        <li class = "list" >#전체</li>
                        <li class = "list" >#럭셔리트래블인제주</li>
                        <li class = "list" >#반려동물동반입장</li>
                        <li class = "list" >#무장애관광</li>
                        <li class = "list" >#공영관광지</li>
                        <li class = "list" >#안전여행스탬프</li>
                        <li class = "list" >#웰니스</li>
                        <li class = "list" >#실내관광지</li>
                        <li class = "list" >#오름</li>
                        <li class = "list" >#포토스팟</li>
                        <li class = "list" >#숲</li>
                        <li class = "list" >#마을관광</li>
                        <li class = "list" >#곶자왈</li>
                        <li class = "list" >#유네스코</li>
                        <li class = "list" >#올레</li>
                        <li class = "list" >#지질트레일</li>
                        <li class = "list" >#한라산</li>
                        <li class = "list" >#언택트</li>
                    </ul>
                </div>
                
                
                <div class ="title2">
                    <p><img src ="./images/location.png">&nbsp;추천 관광지</p>
                </div>

                <div class="list_wrap">
                    <ul>
                        <?php
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo '<li>';
                                echo '<div class="image_area">';
                                echo '<p><img src="' . htmlspecialchars($row['thumbnailpath']) . '"></p>';
                                echo '</div>';
                                echo '<div class="texttag_area">';
                                echo '<div class="text_area">';
                                echo '<p>' . htmlspecialchars($row['title']) . '</p>';
                                echo '<p><img src="./images/small_location.png">&nbsp;' . htmlspecialchars($row['adress']). '</p>';
                                echo '</div>';
                                echo '<div class="tag_area">';
                                $tag_list = explode(",", $row['tag']);
                                for ($i=0; $i<=5; $i +=1){
                                    $isEmpty = empty($tag_list[$i]);
                                    if ($isEmpty){
                                        continue;
                                    }
                                    echo '<p>#' . htmlspecialchars($tag_list[$i])  . '</p>';
                                }

                                echo '</div>';
                                echo '</div>';
                                echo '</li>';
                            }
                        } else {
                            echo "0 results";
                        }
                        $conn->close();

                        ?>
                    </ul>
                </div>
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
                    <a href="./tag.php"><img src="./images/tag2.svg"></a>
                </li>
                <li>
                    <a href="./mypage.php"><img src="./images/user.svg"></a>
                </li>
            </ul>
        </div>
    </footer>
</body>
</html>