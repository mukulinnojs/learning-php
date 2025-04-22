<?php

// Connecting to a db

// We need 4 things to connect to the mysql db

// 1. Server Name

$server = "localhost";

// 2. Username

$user = "root";

// 3. Password

$pass = "";

// 4. Databse Name 

$dbname = "emp";


// We need to store the connection in a variable

$conn = mysqli_connect($server, $user, $pass, $dbname);

// We need to do error handling in case the db connection fails. We need to kill the process in case connection fails.

if (!$conn) {
    die("Failed to connect to the databse" . mysqli_connect_error());
} else {
    echo "Connection to db successful";
}

// IF the connection is successfull we can perform CRUD operations on the db.

// first we need to write out query in a varaible

$sql = "SELECT * FROM employees";

// then we need to execute the query and store the result in a variable

$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Failed to execute query $sql " . mysqli_error($conn));
} else {
    // $row = mysqli_fetch_assoc($result);
    // $row = mysqli_fetch_array($result); //Returns both associative and indexed array 
    // $row = mysqli_fetch_row($result);  
    echo "<br>";

    // 1. Method one to print the current row
    // echo var_dump($row); This is one way to print the current row

    // 2. Method two to print the current row with custom formatting
    // foreach($row as $key => $value){
    //     echo "KEY: ". $key ." VALUE: ". $value ."<br>";
    // }

    //If we call mysqli_fetch_assoc again it will fetch the next row in the table.

    //In order to print all the rows in the db with custom formatting we can use the do while loop. 

    $row = mysqli_fetch_assoc($result);

    do {
        foreach ($row as $key => $value) {
            echo "KEY: " . $key . " VALUE: " . $value . "<br>";
        }
        echo "<br>  ============================= <br>";
        $row = mysqli_fetch_assoc($result);
    } while ($row);
}
