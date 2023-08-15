<?php
require 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo 'Registration successful! <a href="index.php">Login</a>';
    } else {
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }
}
?>