<?php

$localhost = "localhost";
$root = "root";
$password = ""; 
$dbname = "db_websdg7";

$conn = mysqli_connect($localhost, $root, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>