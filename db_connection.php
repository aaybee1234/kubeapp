<?php
$servername = "mysql";
$username = "root";
$password = "abcd-1234";
$dbname = "simple_login";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
