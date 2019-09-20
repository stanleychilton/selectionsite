<?php
require 'connect.php';
$conn    = Connect();

$firstname = htmlspecialchars($_GET["firstname"]);
$lastname = htmlspecialchars($_GET["lastname"]);
$email = htmlspecialchars($_GET["email"]);

$sql = "INSERT INTO students (first_name, last_name, email)
VALUES ('$firstname', '$lastname', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>