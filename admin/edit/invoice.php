<?php
include '../includes/db.php';
$paid = $_POST["paid"];
$id = $_POST["id"];
$sql = "UPDATE bill SET paid='$paid' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header("Location: /admin/invoice.php?page=1&msg=Invoice Edited Successfully !");
    die();
} else {
    header("Location: /admin/invoice.php?page=1&err=Something went Wrong!");
    die();
}
?>