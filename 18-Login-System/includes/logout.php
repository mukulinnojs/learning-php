<?php
session_start();
$_SESSION['loggedin'] = false;
session_unset();
session_destroy();

echo "Logged Out";
header('location: ../index.php');
