<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $title = $_POST["product-title"];
    $price = $_POST["product-price"];
    $img = $_POST["product-image"];

    require 'db.php';

    $sql = 'INSERT INTO products (title , price , img) values (?,?,?)';

    //Initialize stmt
    $stmt = mysqli_stmt_init($conn);

    //Prepare the statement

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Failed";
    } else {
        //Bind Params

        mysqli_stmt_bind_param($stmt, "sis", $title, $price, $img);
        $result = mysqli_stmt_execute($stmt);

        if (!$result) {
            echo "Failed Insertion";
        } else {
            header("Location: ../index.php");
        }
    }

}
