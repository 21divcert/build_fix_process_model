<?php

$servername = "localhost";
$username = "root";
$password = "3220";
$dbname = "ajdb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT contenttscd_name FROM contenttscd ORDER BY RAND() LIMIT 10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<a href='?contenttscd=" . urlencode($row["contenttscd_name"]) . "'>" . $row["contenttscd_name"] . "</a><br>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
            text-decoration: none;
            list-style: none;
            box-sizing: border-box;
        }
        section{
            position: relative;
            width: 100%;
            height: 500px;
            display: flex;
            justify-content: center;
        }
        .list_wrap{
            position: relative;
            width: 90%;
            height: 100%;
        }
        ul{
            position: relative;
            width: 100%;
            height: 100%;
        }
        ul>li{
            position: relative;
            width: 100%;
            height: 140px;
            display: flex;
            background-color: #FFF4E3;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .image_area{
            position: relative;
            width: 30%;
            max-width: 140px;
            min-width: 140px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .text_area{
            position: relative;
            width: 100%;
            height: 100%;
            padding-left: 10px;
        }
        .text_area>p:nth-child(1){
            font-size: 20px;
            font-weight: 600;
            color: #562900;
            padding-top: 20px;
        }
        .text_area>p:nth-child(2){
            font-size: 15px;
            color: #562900;
        }
        .image_area>p{
            position: relative;
            width: 120px;
            height: 120px;
            border-radius: 15px;
            overflow: hidden;
        }
        .image_area>p>img{
            position: relative;
            width: 200px;
            
        }
    </style>
</head>
<body>
    <section>
        <div class="list_wrap">
            <ul>
                <?php
                if (isset($_GET["contenttscd"])) {
                    $contenttscd = $_GET["contenttscd"];
                    $sql = "SELECT * FROM visitjeju WHERE contenttscd LIKE '%" . $contenttscd . "%'";
                    $result = $conn->query($sql);
                
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo '<li>';
                            echo '<div class="image_area">';
                            echo '<p><img src="' . htmlspecialchars($row['thumbnailpath']) . '"></p>';
                            echo '</div>';
                            echo '<div class="text_area">';
                            echo '<p>' . htmlspecialchars($row['title']) . '</p>';
                            echo '<p>' . htmlspecialchars($row['adress']). '</p>';
                            echo '</div>';
                            echo '</li>';
                        }
                    } else {
                        echo "0 results";
                    }
                }
                
                $conn->close();
                ?>
            </ul>
        </div>
    </section>
</body>
</html>