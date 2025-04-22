<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <style>
        .my-form {
            margin: 100px auto;
            width: 400px;
        }
    </style>
</head>

<body class="bg-dark">

    <?php
    function displayAlert($msg, $error, $type = "success")
    {
        echo "<div class='alert alert-$type alert-dismissible fade show' role='alert'>
        <strong>$msg $error </strong>
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
    }
    //Connect to the db

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //DB Credentials
        $server = "localhost";
        $user = "root";
        $pass = "";

        //1.  Connecting to DB
        $conn = mysqli_connect($server, $user, $pass);

        if (!$conn) {
            displayAlert("DB Connection Failed : ", mysqli_connect_error(), "danger");
            die();
        } else {
            displayAlert("DB Connection Successfull ", "", "success");
        }

        //2. Creating a Database
        $sql = "CREATE DATABASE IF NOT EXISTS users";
        $result = mysqli_query($conn, $sql);

        if (!$result) {

            displayAlert("Failed to create DB ", mysqli_error($conn), "danger");
            die();
        } else {
            displayAlert("DB created successfully ", "", "success");
        }

        //3. USE database
        $dbname = "users";
        $sql = "USE $dbname";

        $result = mysqli_query($conn, $sql);
        if (!$result) {

            displayAlert("Failed to USE DB $dbname ", mysqli_error($conn), "danger");
            die();
        } else {
            displayAlert("USING $dbname", "", "success");
        }

        // 4. Create table
        $sql = "CREATE TABLE if not exists users (user_id INT(20) PRIMARY KEY AUTO_INCREMENT, full_name varchar(50) NOT NULL ,email VARCHAR(50) NOT NULL, pass VARCHAR(50) NOT NULL )";
        $result = mysqli_query($conn, $sql);
        if (!$result) {

            displayAlert("Failed to CREATE TABLE", mysqli_error($conn), "danger");
            die();
        } else {
            displayAlert("Table created successfully", "", "success");
        }


        //5. Insert form data into table
        $full_name = mysqli_real_escape_string($conn, $_POST["full-name"]);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $pass = mysqli_real_escape_string($conn, $_POST["pass"]);
        $conpass = mysqli_real_escape_string($conn, $_POST["confirm-pass"]);

        if ($pass == $conpass) {
            $sql = "INSERT INTO users (full_name, email, pass) VALUES ('$full_name','$email', '$pass')";
        } else {
            displayAlert("Passwords do not match", "", "danger");
            die();
        }

        $result = mysqli_query($conn, $sql);

        if (!$result) {

            displayAlert("Failed to Insert Data", mysqli_error($conn), "danger");
            die();
        } else {
            displayAlert("Data inserted successfully", "", "success");
        }

        die();
    }
    ?>

    <div class="my-form bg-light p-5 rounded-2">
        <h2 class="text-primary mb-3">Sign up</h2>
        <hr>
        <form action="12-Signupform.php" method="post">
            <div class="mb-3">
                <label for="full-name" class="form-label">Full Name</label>
                <input type="text" name="full-name" class="form-control" id="full-name" placeholder="Full Name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Password</label>
                <input type="password" name="pass" class="form-control" id="pass" placeholder="Password">
            </div>
            <div class="mb-3">
                <label for="confirm-pass" class="form-label">Confirm Password</label>
                <input type="password" name="confirm-pass" class="form-control" id="confirm-pass" placeholder="Confirm Password">
            </div>
            <button type="submit" class="btn btn-primary">Sign up</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>