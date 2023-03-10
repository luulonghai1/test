<?php
$servername = "localhost";
$username = "root";
$password = "";
$tenweb = "WEB_S&W";

// Create connection
$conn = new mysqli($servername, $username,$password,$tenweb);

// Check connection
if ($conn->connect_error) {
    echo("Kết nối thất bại " . $conn->connect_error);
    exit();
}


?>