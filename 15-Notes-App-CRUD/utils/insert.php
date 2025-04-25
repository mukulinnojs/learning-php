<?php
session_start();
include 'db.php';
//INSERT A NOTE
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $desc = mysqli_real_escape_string($conn, $_POST['desc']);

    $sql = "INSERT INTO notes (title, notedesc) values ('$title','$desc')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        $_SESSION['inserted'] = true;
    }
    header('Location: ../index.php');
}


?>