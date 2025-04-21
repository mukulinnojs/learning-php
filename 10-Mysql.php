<?php
//Connecting to a database.
$servername = "localhost";
$username = "root";
$password = '';
$dbname = 'emp';

//Create a connection variable to store the connection reaponse

$conn = mysqli_connect($servername, $username, $password, $dbname);

//Error Handling 
if (!$conn) {
    die('Failed to connect!' . mysqli_connect_error());
}

echo "Connection Successfull!";


//1. CREATING A DATABSE 
// $sql = "CREATE DATABASE dbname";

// 2. Creating a table
// $sql = "CREATE TABLE tablename (colname constraints)";

// 3. Displaying records from the table
// $myquery = "SELECT * FROM employees"; //Used this query to fetch existing results from the employee table
$myquery = 'CREATE TABLE student (rollno INT(5) PRIMARY KEY AUTO_INCREMENT, std_name VARCHAR(50) NOT NULL )';
// $myquery = "DROP TABLE student";
$result = mysqli_query($conn, $myquery);
if (!$result) {
    echo "Failed to CREATED table";
} else {
    echo "Table CREATED successfullly";
}
echo "<br>";



// if ($numofrows > 0) {
//     $row = mysqli_fetch_assoc($result);
//     echo $row["emp_name"];
// }
