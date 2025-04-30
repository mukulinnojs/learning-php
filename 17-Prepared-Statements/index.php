<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prepared Statements</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Add Product Modal -->
    <div class="modal fade" id="add-product" tabindex="-1" aria-labelledby="Add Product" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add a New Product</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="includes/insert-product.php" method="post">
                        <div class="mb-3">
                            <label for="product-title" class="col-form-label">Product Name</label>
                            <input type="text" class="form-control" id="product-title" name="product-title">
                        </div>
                        <div class="mb-3">
                            <label for="product-price" class="col-form-label">Price</label>
                            <input type="number" class="form-control" id="product-price" name="product-price"></input>
                        </div>
                        <div class="mb-3">
                            <label for="product-image" class="col-form-label">Image Link</label>
                            <input type="text" class="form-control" id="product-image" name="product-image"></input>
                        </div>
                        <div class="d-flex justify-content-end gap-3">
                            <button type="submit" class="btn btn-primary">Add Product</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Edit Modal -->
    <div class="modal fade" id="edit-product" tabindex="-1" aria-labelledby="Edit Product" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Product</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="includes/update-product.php" method="post">
                        <input type="hidden" class="form-control js-sno-input" id="product-sno" name="product-sno">
                        <div class="mb-3">
                            <label for="product-title" class="col-form-label">Product Name</label>
                            <input type="text" class="form-control js-title-input" id="product-title"
                                name="product-title">
                        </div>
                        <div class="mb-3">
                            <label for="product-price" class="col-form-label">Price</label>
                            <input type="number" class="form-control js-price-input" id="product-price"
                                name="product-price"></input>
                        </div>
                        <div class="mb-3">
                            <label for="product-image" class="col-form-label">Image Link</label>
                            <input type="text" class="form-control js-img-input" id="product-image"
                                name="product-image"></input>
                        </div>
                        <div class="d-flex justify-content-end gap-3">
                            <button type="submit" class="btn btn-primary">Confirm Edit</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Delete Modal -->
    <div class="modal fade" id="delete-product" tabindex="-1" aria-labelledby="Delete Product" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Product</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="includes/delete-product.php" method="post">
                        <input type="hidden" class="form-control js-sno-dlt-input" id="product-sno" name="product-sno">
                        <p>Are you sure you want to delete this products ?</p>
                        <div class="d-flex justify-content-end gap-3">
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <header class="d-flex justify-content-between p-5">
        <h1>Products</h1>
        <button type="button" class="btn btn-primary ms-auto" data-bs-toggle="modal" data-bs-target="#add-product"
            data-bs-whatever="@mdo">Add New Product</button>
    </header>
    <div class="product-container">

        <?php
        require 'includes/fetch-products.php';

        if ($products) {
            foreach ($products as $row) {
                echo "
                <div class='card' style='width: 18rem;'>
                    <img src='" . $row['img'] . "' class='card-img-top' alt='product-img'>
                    <div class='card-body'>
                        <h5 class='card-title'>" . $row['title'] . "</h5>
                        <p class='card-text'> $" . $row['price'] . "</p>
                        <button type='button' class='btn btn-primary ms-auto' data-bs-toggle='modal' data-bs-target='#edit-product'
            data-bs-title='" . $row['title'] . "' data-bs-price='" . $row['price'] . "' data-bs-img='" . $row['img'] . "' data-bs-sno='" . $row['id'] . "'>Edit Product</button>
                        <button type='button' class='btn btn-danger ms-auto' data-bs-toggle='modal' data-bs-target='#delete-product' data-bs-sno='" . $row['id'] . "'>Delete Product</button>
                    </div>
                </div>";
            }
        }
        ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>

</body>

</html>