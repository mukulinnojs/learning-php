<?php

// To connect to a databse using pdo we can use the dbconfig.php which has the configuration for the connection

require 'dbconfig.php';

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($pdo) {
        $_SESSION['db'] = true;
    }
} catch (PDOException $e) {
    $_SESSION['dberr'] = $e->getMessage();
}
