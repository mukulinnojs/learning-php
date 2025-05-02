<?php

$server = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "users";

$conn = mysqli_connect($server, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die("" . mysqli_connect_error());
}