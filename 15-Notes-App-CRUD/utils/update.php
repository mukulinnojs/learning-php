<?php
session_start();
include 'db.php';
//INSERT A NOTE
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $sno = intval($_POST['sno-edit']);
    $title = mysqli_real_escape_string($conn, $_POST['note-title-edit']);
    $desc = mysqli_real_escape_string($conn, $_POST['desc-text-edit']);

    $sql = "UPDATE `notes` SET `title` = '$title', `notedesc` = '$desc' WHERE `notes`.`sno` = $sno";

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Nahi hua" . mysqli_error($conn);
    } elseif ($result) {
        echo "Updated Successfully";
        $_SESSION['updated'] = true;
    }
    header('Location: ../index.php');
}


?>