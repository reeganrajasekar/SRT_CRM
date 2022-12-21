<?php
include '../includes/db.php';

$code = $_POST["code"];
$name = $_POST["name"];
$rate = $_POST["rate"];
$stock = $_POST["stock"];
$quantity = $_POST["quantity"];
$sql = "INSERT INTO product (code,name,rate,stock,quantity)
VALUES ('$code','$name','$rate','$stock','$quantity')";

if ($conn->query($sql) === TRUE) {
    header("Location: /admin/product.php?page=1&msg=Product added Successfully !");
    die();
} else {
    header("Location: /admin/product.php?page=1&err=Something went Wrong!");
    die();
}


?>