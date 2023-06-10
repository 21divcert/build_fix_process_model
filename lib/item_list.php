<?php
include "./lib/mysql.php";

if (isset($_GET['tag'])) {
    $tag = $_GET['tag'];
    if ($tag === "810번") {
        $table = "bus_810";
        $sql = "SELECT thumbnailpath, title, adress, tag FROM $table LIMIT 100";
    }
    else if($tag === "820번"){
        $table = "bus_820";
        $sql = "SELECT thumbnailpath, title, adress, tag FROM $table LIMIT 100";
    } else {
        $table = "visitjeju";
        $sql = "SELECT thumbnailpath, title, adress, tag FROM visitjeju WHERE contenttscd = '$tag' LIMIT 100";
    }
    $result = mysqli_query($conn, $sql);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $thumbnailPath = $row['thumbnailpath'];
            $title = $row['title'];
            $address = $row['adress'];
            $tag = $row['tag'];

            echo '<li>';
            echo '<div class="list_box">';
            echo '<div class="list_img">';
            echo '<img src="' . $thumbnailPath . '">';
            echo '</div>';
            echo '<div class="list_text">';
            echo '<p class="list_title">' . $title . '</p>';
            echo '<div class="location_text">';
            echo '<p><img src="./images/location.png"></p>';
            echo '<p>' . $address . '</p>';
            echo '</div>';
            echo '<div class="tag_area">';
            echo '<ul class="tag_list">';
            $tagList = explode(',', $tag);
            foreach ($tagList as $tagItem) {
                echo '<li><p>' . $tagItem . '</p></li>';
            }
            echo '</ul>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</li>';
        }
        mysqli_free_result($result);
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo '정보없음';
}
?>
