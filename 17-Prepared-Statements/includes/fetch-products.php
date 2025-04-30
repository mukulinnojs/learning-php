<?php


require 'db.php';

$id = 1;
//Write template qurey
$sql = "SELECT * FROM products";

//Initialize Statement
$stmt = mysqli_stmt_init($conn);

//Prepare Statement

if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "Failed";
} else {
    //Execute The statement
    mysqli_stmt_execute($stmt);

    //Fetch Results

    $result = mysqli_stmt_get_result($stmt);

    // Fetch all rows into an array
    $products = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
    }
}