<?php 
include '../includes/db.php';

$name = $_POST["name"];
$mob = $_POST["mob"];
$address = $_POST["address"];

$sql = "INSERT INTO client (name,mob,address)
VALUES ('$name','$mob','$address')";

if ($conn->query($sql) === TRUE) {
    header("Location: /admin/client.php?page=1&msg=User added Successfully !");
    die();
} else {
    header("Location: /admin/client.php?page=1&err=Something went Wrong!");
    die();
}


?>