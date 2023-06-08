<?php

$servername = "localhost";
$username = "root";
$password = "3220";
$dbname = "ajdb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT tag FROM visitjeju";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $tags = explode(",", $row["tag"]);
        foreach ($tags as $tag) {
            if (!empty($tag)) {
                $stmt = $conn->prepare("INSERT INTO tag (tag_name) SELECT ? WHERE NOT EXISTS (SELECT * FROM tag WHERE tag_name=?)");
                $stmt->bind_param("ss", $tag, $tag);
                $stmt->execute();
            }
        }
    }
} else {
    echo "0 results";
}

$conn->close();
?>