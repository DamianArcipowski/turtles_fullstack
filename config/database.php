<?php

$dbhost = 'localhost';
$dbuser = 'turtle';
$dbpassword = 'zaq1@WSX';
$dbname = 'turtles_prod';

$conn = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);

if ($conn->connect_error) {
    die('Connection failed ' . $conn->connect_error);
}

?>