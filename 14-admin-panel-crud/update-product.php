<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    require 'db.php';

    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $price = intval($_POST["price"]);
    $id = intval($_POST["id"]);

    $sql = "UPDATE products SET title = '" . addslashes($title) . "', price = " . floatval($price) . " WHERE id = " . intval($id);


    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo '<div class="alert alert-danger" role="alert">
                <b> Failed to update product </b>
            </div>';
        die(mysqli_error($conn));
    } else {
        echo '
              <div class="alert alert-success" role="alert">
                <b>Product Updated Successfully!</b>
            </div>';
    }
}

?>