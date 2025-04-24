<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin CRUD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous" />
</head>

<body>
  <!-- Navbar -->
  <div class="d-flex justify-content-between p-5">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active fw-bold text-primary" aria-current="page" href="#">PRODUCTS</a>
      </li>
    </ul>
    <div>
      <a href="product.php" class="btn btn-primary">Add New Product</a>
      <button class="btn btn-danger">Logout</button>
    </div>
  </div>

  <?php
  // Turn on PHP error display for development 
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  // Connect to the database
  $server = "localhost";
  $user = "root";
  $pass = "";
  $dbname = "amazon";

  $conn = mysqli_connect($server, $user, $pass, $dbname);

  if (!$conn) {
    echo '<div class="alert alert-danger" role="alert"><b>Server Error! Unable to connect to database.</b></div>';
    die();
  }

  $sql = "SELECT * FROM products";
  $result = mysqli_query($conn, $sql);

  if (!$result) {
    echo '<div class="alert alert-danger" role="alert"><b>Failed to fetch products from the database!</b></div>';
  } elseif ($result) { ?>
    <div class='container'>
      <div class='row product-grid'>
        <?php while ($row = mysqli_fetch_assoc($result)) {

          echo "
        <div class='card col-6' style='width: 20rem; height:fit-content;'>
        <div class='d-flex flex-column justify-content-center align-items-center p-3' style='height:10rem;'>
        <img src=" . $row['img'] . " class='card-img-top' height='100%' alt='Product Image'>
        </div>
        <div class='card-body text-center'>
        <h5 class='card-title'>" . $row['title'] . "</h5>
        <p class='card-text'>$" . $row['price'] . "</p>
        <a href='edit-product.php?id=" . $row['id'] . " class='btn btn-primary'>Edit Product</a>
        </div>
        </div>
       ";
        }
        ?>

      </div>
    </div>

  <?php } else {
    echo "
    <div class='container'>
      <div class='alert alert-warning mt-4 text-center'>No products found in the database.</div>
    </div>
  >";
  } ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
    crossorigin="anonymous"></script>

  <script type="module" src="script.js"></script>
</body>

</html>