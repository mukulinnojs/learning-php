<?php
session_start();
require "includes/db.php";

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>
    <?php
    require "components/_modals.php";
    require "components/_nav.php";

    if (isset($_SESSION['emailexists']) && $_SESSION['emailexists']) {
        echo "<p class='text-danger' style='margin-top:80px;'>Email already exists</p>";
    }

    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]) {
        echo "<div class='mt-5'><h1>Welcome, " . $_SESSION['full_name'] . "</h1>";
        echo "<br> You are Logged In</div>";
    } else {
        echo "<div class='mt-5'>You are not logged in</div>";
    }

    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</body>

</html>