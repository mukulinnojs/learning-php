<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require "../includes/db.php";

    $fullname = $_POST['signup-name'];
    $email = $_POST['signup-email'];
    $pass = $_POST['signup-pass'];
    $pass2 = $_POST['signup-pass2'];

    if ($pass != $pass2) {
        echo 'passwords do not match';
        exit;
    }
    $sql = "SELECT * FROM users where email = ?";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        die(mysqli_stmt_error($stmt));
    } else {
        mysqli_stmt_bind_param($stmt, 's', $email);
        mysqli_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['emailexists'] = true;
            header('location: ../index.php');
            exit;
        }
    }

    $sql = "INSERT INTO users (full_name,email,pass) VALUES (?,?,?)";

    //Initialize stmt

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        die(mysqli_stmt_error($stmt));
    } else {
        //Bind Statement

        $hash = password_hash($pass, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "sss", $fullname, $email, $hash);
        mysqli_stmt_execute($stmt);

        if (mysqli_stmt_affected_rows($stmt)) {
            session_start();
            $_SESSION["signupcheck"] = true;
            header('location: ../index.php');

        } else {
            die(mysqli_stmt_error($stmt));
        }
    }

}