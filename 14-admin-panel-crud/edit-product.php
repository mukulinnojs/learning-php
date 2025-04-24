<?php
if (!isset($_GET['id'])) {
    die();
}
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous" />
</head>

<body>

    <form action='update-product.php' class='product-edit-form container d-flex flex-column' method="post">
        <div class='mb-3 row'>
            <input type="hidden" value="<?php echo $id; ?>" name="id" id="id">
            <div class='col'>

                <label for='title' class='form-label'>Product Title</label>
                <input type='text' class='form-control' id="title" name="title">
            </div>
            <div class='col'>

                <label for='price' class='form-label'>Product Price</label>
                <input type='number' class='form-control' id="price" name="price">
            </div>
        </div>

        <div class='row w-25 align-self-center'>
            <button type='submit' class='col btn btn-primary'>Submit Changes</button>
        </div>
    </form>
    <div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
            crossorigin="anonymous"></script>
</body>

</html>