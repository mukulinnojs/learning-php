<?php
require 'db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $img = mysqli_real_escape_string($conn, $_POST['img']);
    $price = intval($_POST['price']);
    $sql = "INSERT INTO products (title,price,img) values('" . addslashes($title) . "' , $price,'" . addslashes($img) . "')";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo "Failed to add new product";
        die(mysqli_error($conn));
    } else {
        echo "Product added successfully";
    }
}

?>