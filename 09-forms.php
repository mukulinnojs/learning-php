<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <style>
        .my-form {
            margin: 200px auto;
            width: 400px;
        }
    </style>
</head>

<body class="bg-dark">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") { //$_SERVER is a built in php variable that allows us to check the form submission request method among other things.

        //Extracted fields from the post request.
        $email = $_POST["email"]; //this came from the input where name  = 'email'
        $pass = $_POST["pass"]; //this came from the input where name  = 'pass'

        //Displayed alert after logging in
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Login Successfull!</strong> Your Email: <b>' . $email . '</b> Your Password: <b>' . $pass . '</b>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    ?>

    <div class="my-form bg-light p-5 rounded-2">
        <h2 class="text-primary mb-3">Log In</h2>
        <hr>
        <form action="09-forms.php" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Password</label>
                <input type="password" name="pass" class="form-control" id="pass">
            </div>
            <button type="submit" class="btn btn-primary">Log In</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>