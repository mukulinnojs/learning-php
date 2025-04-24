<?php
// Turn off PHP error display
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);
//Connect to the db
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "amazon";

$conn = mysqli_connect($server, $user, $pass, $dbname);

if (!$conn) {
    echo '<div class="alert alert-danger" role="alert">
       <b>Server Error!</b>
      </div>';
    die();
}
?>