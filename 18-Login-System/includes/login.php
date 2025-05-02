<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require "db.php";

    $email = $_POST['login-email'];
    $pass = $_POST['login-pass'];
    $sql = "SELECT * FROM users where email = ?";

    //Initialize stmt

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        die(mysqli_stmt_error($stmt));
    } else {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                if (password_verify($pass, $row['pass'])) {
                    session_start();
                    $_SESSION['user_id'] = $row['user_id'];
                    $_SESSION['full_name'] = $row['full_name'];
                    $_SESSION['loggedin'] = true;
                    header('location: ../index.php');
                } else {
                    echo "Invalid Credentials 1";
                }
            }
        } else {
            echo "Invalid Credentials";
        }
    }

}