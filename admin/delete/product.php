<?php 
include '../includes/db.php';

$id = $_GET["id"];
$sql = "DELETE FROM product where id='$id'";

if ($conn->query($sql) === TRUE) {
    header("Location: /admin/product.php?msg=Product Deleted Successfully !");
    die();
} else {
    header("Location: /admin/product.php?err=Something went Wrong!");
    die();
}


?>