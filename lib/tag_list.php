<?php
include "./lib/mysql.php";


if (isset($_GET['tag'])) {
    $selectedTag = $_GET['tag'];
} else {
    $selectedTag = ""; 
}

$sql = "SELECT contenttscd_name FROM contenttscd";
$result = mysqli_query($conn, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $content = $row['contenttscd_name'];
        if ($content === $selectedTag) {
            echo '<li><p>#' . $content . '</p></li>';
        } else { 
            echo '<li><a href="?tag=' . $content . '"><p>#' . $content . '</p></a></li>';
        }
    }
    mysqli_free_result($result);
} else {
    echo 'Error: ' . mysqli_error($conn);
}

mysqli_close($conn);
?>
