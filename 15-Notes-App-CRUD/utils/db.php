<?php

$server = "localhost";
$user = "root";
$pass = "";
$dbname = "notes";

$conn = mysqli_connect($server, $user, $pass, $dbname);

if (!$conn) {
    die(mysqli_connect_error());
}

?>