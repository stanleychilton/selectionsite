<?php
require 'connect.php';
$conn    = Connect();

$email = $_GET['email'];
$id = $_GET['id'];


echo $email . $id;

$sql = "UPDATE students SET selected=1 WHERE email='$email'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$sql = "UPDATE instances SET active=1 WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

header('Location: /selectionsite');








?>