<?php
$servername = "feenix-mariadb.swin.edu.au";
$username = "cos20031_44";
$password = "4sQJu6GKXJ";
$dbname = "cos20031_44_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
