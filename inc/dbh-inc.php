<?php

$serevername = "localhost";
$dBUsername = "project";
$dBPassword = "1234";
$dBName = "cinema";

$conn = mysqli_connect($serevername, $dBUsername,$dBPassword, $dBName);

if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
define('ROOT_URL', 'http://localhost/cinema-WEB/');