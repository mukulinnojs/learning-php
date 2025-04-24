<?php
class Product
{
    public $title;
    public $price;
    public $img;
    public function __construct($title, $price, $img)
    {
        $this->title = $title;
        $this->price = $price;
        $this->img = $img;
    }
}
//Connect TO DB USing variables

$server = "localhost";
$user = 'root';
$pass = "";


//store the connection in a variable

$conn = mysqli_connect($server, $user, $pass);

if (!$conn) {
    die("DB Connection failed" . mysqli_connect_error());
} else {
    echo "DB Connection Successfull!";
}

//Create a database


$sql = "CREATE DATABASE IF NOT EXISTS amazon";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Failed to create DB" . mysqli_error($conn));
} else {
    echo "DB Created successfully";
}


//USE Daatabase
$sql = "USE amazon";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Failed to USE DB" . mysqli_error($conn));
}


//Create table

$sql = "CREATE TABLE if not exists products (id INT(15) primary key AUTO_INCREMENT, title VARCHAR(50) NOT NULL, price INT(20) NOT NULL CHECK(price>0), img varchar(1000) not null)";

$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Failed to CREATE TABLE" . mysqli_error($conn));
}

//INSERT PRODUCT DATA THROUGH PRODUCT ARRAY

$product = new Product("Test", 500, "https://m.media-amazon.com/images/I/61+Ae1GP9GL._AC_UL320_.jpg");

$sql = "INSERT INTO products (title, price, img) VALUES (
    '" . mysqli_real_escape_string($conn, $product->title) . "',
    " . intval($product->price) . ",
    '" . mysqli_real_escape_string($conn, $product->img) . "'
)";

$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Failed to INSERT PRODUCT" . mysqli_error($conn));
}

//Display the product

$sql = "SELECT * FROM products where id = 1";

$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Failed to retrieve PRODUCT" . mysqli_error($conn));
} else {
    $row = mysqli_fetch_assoc($result);
    echo '<br>';
    echo '<img src=' . $row['img'] . '>
            <p>' . $row['title'] . '</p>        
            <p>' . $row['price'] . '</p>'
    ;
}

?>