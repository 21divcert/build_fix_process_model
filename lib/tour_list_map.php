<?php
include "./lib/mysql.php";

// tourist attraction_810 테이블의 pid_810과 일치하는 행을 조회
$sql = "SELECT ta.adress, tl.name, tl.tour_id
        FROM tourist_attraction_810 AS ta
        INNER JOIN tourlist_810 AS tl ON ta.pid_810 = tl.id";
$result = mysqli_query($conn, $sql);

$sql2 = "SELECT ta.adress, tl.name, tl.tour_id
        FROM tourist_attraction_820 AS ta
        INNER JOIN tourlist_820 AS tl ON ta.pid_820 = tl.id";
$result2 = mysqli_query($conn, $sql2);

if ($result) {
    // 결과 행을 순회하며 출력
    while ($row = mysqli_fetch_assoc($result)) {
        $adress = $row['adress'];
        $name = $row['name'];
        $tour_id = $row['tour_id'];
        
        // tour_marker 함수 호출 및 출력
        echo "tour_marker('$adress', '$name', $tour_id);";
    }
} else {
    echo 'Error: ' . mysqli_error($conn);
}

if ($result2) {
    // 결과 행을 순회하며 출력
    while ($row2 = mysqli_fetch_assoc($result2)) {
        $adress = $row2['adress'];
        $name = $row2['name'];
        $tour_id = $row2['tour_id'];
        
        // tour_marker 함수 호출 및 출력
        echo "tour_marker('$adress', '$name', $tour_id);";
    }
} else {
    echo 'Error: ' . mysqli_error($conn);
}

mysqli_close($conn);
?>
