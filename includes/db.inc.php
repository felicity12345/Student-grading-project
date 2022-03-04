<?php

$serverName = " localhost";
$dBUserName = "root";
$dBpassword = "";
$dBName = "GROUPHCOURSEWORK";

$conn = mysqli_connect($serverName, $dBUserName, $dBpassword, $dBName);

if (!$conn) {
die("connection failed:" . mysqli_connect_error());
}