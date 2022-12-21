<?php
include '../includes/db.php';

$userid = $_POST["userid"];
$username = $_POST["username"];
$usermob = $_POST["usermob"];
$useraddress = $_POST["useraddress"];
$total = $_POST["totalamount"];
$payment = $_POST["paymentmethod"];
$paid = $_POST["paidamount"];

$totalitems = $_POST["overitems"];
$data = [];
for ($i = 0; $i < $totalitems; $i++) {
    if ($_POST["itemid" . $i]) {
        $id = $_POST["itemid" . $i];
        $data[$i] = [$_POST["itemid" . $i], $_POST["totalitem" . $i], $_POST["rate" . $i], $_POST["amount" . $i]];
        $sql = "SELECT stock FROM product where id='$id'";
        $result = $conn->query($sql);
        $stock = 0;
        while ($row = $result->fetch_assoc()) {
            $stock = $row["stock"] - $_POST["totalitem" . $i];
        }
        $sql = "UPDATE product SET stock='$stock' WHERE id=$id";
        $conn->query($sql);
    }
}
$final = json_encode($data);
$sql = "INSERT INTO bill (userid,username,usermob,useraddress,total,payment,paid,items)
VALUES ('$userid','$username','$usermob','$useraddress',$total,'$payment','$paid','$final')";

if ($conn->query($sql) === TRUE) {
    header("Location: /admin/invoice.php?page=1&msg=Bill added Successfully !");
    die();
} else {
    header("Location: /admin/invoice.php?page=1&err=Something went Wrong!");
    die();
}


?>