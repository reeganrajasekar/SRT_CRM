<?php 
include '../includes/db.php';

$code = $_POST["code"];
$name = $_POST["name"];
$rate = $_POST["rate"];
$stock = $_POST["stock"];

$sql = "INSERT INTO product (code,name,rate,stock)
VALUES ('$code','$name','$rate','$stock')";

if ($conn->query($sql) === TRUE) {
    header("Location: /admin/product.php?msg=Product added Successfully !");
    die();
} else {
    header("Location: /admin/product.php?err=Something went Wrong!");
    die();
}


?>