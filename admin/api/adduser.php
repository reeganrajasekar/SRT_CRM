<?php
include '../includes/db.php';

$name = $_GET["name"];
$mob = $_GET["mob"];
$address = $_GET["address"];

$sql = "INSERT INTO client (name,mob,address)
VALUES ('$name','$mob','$address')";

if ($conn->query($sql) === TRUE) {
    echo json_encode("0");
} else {
    echo json_encode("ok");
}


?>