<?php
include '../includes/db.php';
$code = $_POST["code"];
$id = $_POST["id"];
$name = $_POST["name"];
$rate = $_POST["rate"];
$stock = $_POST["stock"];
$sql = "UPDATE product SET code='$code',name='$name',rate=$rate,stock=$stock WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header("Location: /admin/product.php?page=1&msg=Product Edited Successfully !");
    die();
} else {
    header("Location: /admin/product.php?page=1&err=Something went Wrong!");
    die();
}
?>