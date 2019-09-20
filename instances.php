<?php
require 'connect.php';
$conn    = Connect();

$url = htmlspecialchars($_GET["url"]);


$sql = "INSERT INTO instances (instance_url)
VALUES ('$url')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>