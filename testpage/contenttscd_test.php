<?php

$servername = "localhost";
$username = "root";
$password = "3220";
$dbname = "ajdb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT contenttscd FROM visitjeju";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $contenttscds = explode(",", $row["contenttscd"]);
        foreach ($contenttscds as $contenttscd) {
            if (!empty($contenttscd)) {
                $stmt = $conn->prepare("INSERT INTO contenttscd (contenttscd_name) SELECT ? WHERE NOT EXISTS (SELECT * FROM contenttscd WHERE contenttscd_name=?)");
                $stmt->bind_param("ss", $contenttscd, $contenttscd);
                $stmt->execute();
            }
        }
    }
} else {
    echo "0 results";
}

$conn->close();
?>