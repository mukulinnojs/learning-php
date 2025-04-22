<?php
$server = "localhost";
$username = "root";
$pass = "";
$dbname = "emp";


$conn =  mysqli_connect($server, $username, $pass, $dbname);

if (!$conn) {
    die("Failed to connect to db" . mysqli_connect_error());
} else {
    echo "DB connection successfull!<br> <br>";
}

$sql = "INSERT INTO employees (emp_id,emp_name, emp_salary) values (8,'Aniket' , 12500 )";
$result =  mysqli_query($conn, $sql);

if (!$result) {
    die("Failed insert operation" . mysqli_error($conn));
} else {
    echo "Insertion successfull";
}
