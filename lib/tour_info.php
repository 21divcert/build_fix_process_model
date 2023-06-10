<?php
include "../lib/mysql.php";

if (isset($_POST['title'])) {
    $title = $_POST['title'];
    $sql = "SELECT * FROM visitjeju WHERE title = '$title' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $name = $row['title'];
        $location = $row['adress'];
        $info = $row['introduction'];
        $image = $row['imgpath'];
        $response = array(
            'name' => $name,
            'location' => $location,
            'info' => $info,
            'image' => $image
        );
        echo json_encode($response);
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
