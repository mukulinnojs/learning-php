<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require 'db.php';

    $id = $_POST['product-sno'];
    echo $id;

    $sql = "DELETE FROM products where id = ?";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        header("Location: ../index.php");
    }
}