<?php
session_start();

require "includes/db.php";

?>
 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test DOC</title>
</head>

<body>
    <?php
    if (isset($_SESSION['db']) && $_SESSION['db']) {
        if ($pdo) {
            echo "Connected Successfully";
            $_SESSION['db'] = false;
        }
    } else {
        echo "Connection Failed: " . $_SESSION['dberr'];
    }
    ?>
</body>

</html>