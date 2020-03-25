<?php
    $username = 'root';
    $password = 'gauransh098@';
    $host = 'localhost';
    $database = 'php-assignment';
    $conn = mysqli_connect($host,$username,$password,$database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    session_start();
?>