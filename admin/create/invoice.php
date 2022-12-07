<?php 
include '../includes/db.php';

$userid = $_POST["userid"];
$total = $_POST["totalamount"];
$payment = $_POST["paymentmethod"];
$paid = $_POST["paidamount"];

$totalitems = $_POST["overitems"];
$data = [];
for($i=0;$i<$totalitems;$i++){
    if($_POST["itemid".$i]){
        $data[$i]=[$_POST["itemid".$i],$_POST["totalitem".$i],$_POST["rate".$i],$_POST["amount".$i]];
    }
}
echo json_encode($data);
$final = json_encode($data);
$sql = "INSERT INTO bill (userid,total,payment,paid,items)
VALUES ('$userid',$total,'$payment','$paid','$final')";

if ($conn->query($sql) === TRUE) {
    header("Location: /admin/invoice.php?page=1&msg=Bill added Successfully !");
    die();
} else {
    header("Location: /admin/invoice.php?page=1&err=Something went Wrong!");
    die();
}


?>