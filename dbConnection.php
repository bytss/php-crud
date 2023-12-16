<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "hellophp";

// Create connection
$mysqli = mysqli_connect($servername, $username, $password, $dbName);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
echo "Connected successfully";
