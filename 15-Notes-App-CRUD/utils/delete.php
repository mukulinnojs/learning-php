<?php
session_start();
include "db.php";


$_SESSION['deleted'] = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $sno = intval($_POST['sno-delete']);
    echo $sno;
    $sql = "DELETE from notes where `notes`.`sno`= $sno";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        $_SESSION['deleted'] = true;
    } else {
        echo "$sno" . mysqli_error($conn);
    }
    header('Location: ../index.php');

}


?>