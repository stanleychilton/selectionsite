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

$sql = "SELECT first_name, last_name FROM students WHERE email='$email'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

$name = $row['first_name'] . " " . $row['last_name'];

$sql = "UPDATE instances SET active=1, selected_by='$name' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

header('Location: /selectionsite');








?>