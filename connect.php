<?php
function Connect()
{
    $servername = "";
    $username = "";
    $password = "";
    $dbname = "";


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname) or die($conn->connect_error);
 
    return $conn;
} 
?>