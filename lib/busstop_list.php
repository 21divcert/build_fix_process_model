<?php
include "./lib/mysql.php";
$sql = "SELECT * FROM bus810_stop";
$sql2 = "SELECT * FROM bus820_stop";
$result = mysqli_query($conn, $sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
       $lat = $row['lat'];
       $lon = $row['lon'];
       $name = $row['stopname'];       
       echo '<script>marker('.$lat.','.$lon.',`<div style="padding:0 1px;background:orange; border-radius:5px; color:white; font-weight:600; font-size:15px;margin-top:106px;">'.$name.'</div>`);</script>';

    }
} else {
    echo 'Error: ' . mysqli_error($conn);
}
$result2 = mysqli_query($conn, $sql2);
if ($result2) {
    while ($row2 = mysqli_fetch_assoc($result2)) {
       $lat = $row2['lat'];
       $lon = $row2['lon'];
       $name = $row2['stopname'];
       echo '<script>marker('.$lat.','.$lon.',`<div style="padding:0 1px;background:orange; border-radius:5px; color:white; font-weight:600; font-size:15px;margin-top:106px;">'.$name.'</div>`);</script>';
    }
} else {
    echo 'Error: ' . mysqli_error($conn);
}
mysqli_close($conn);
?>
