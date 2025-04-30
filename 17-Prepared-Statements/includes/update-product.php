<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require "db.php";
    $sno = $_POST['product-sno'];
    $title = $_POST['product-title'];
    $price = $_POST['product-price'];
    $img = $_POST['product-image'];

    $sql = "UPDATE products SET title=? , price =?, img=? WHERE id = ? ";

    //Initialize stmt
    $stmt = mysqli_stmt_init($conn);

    //Prepare Stmt 

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Failed prep";
        echo mysqli_stmt_error($stmt);
        die();
    } else {
        //Bind Params
        mysqli_stmt_bind_param($stmt, 'sisi', $title, $price, $img, $sno);

        //Execute Stmt
        mysqli_stmt_execute($stmt);
        header("location: ../index.php");
    }
}