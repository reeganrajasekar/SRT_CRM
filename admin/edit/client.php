<?php
include '../includes/db.php';
$address = $_POST["address"];
$id = $_POST["id"];
$name = $_POST["name"];
$mob = $_POST["mob"];
$sql = "UPDATE client SET name='$name',mob='$mob',address='$address' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header("Location: /admin/client.php?page=1&msg=User Details Edited Successfully !");
    die();
} else {
    header("Location: /admin/client.php?page=1&err=Something went Wrong!");
    die();
}
?>