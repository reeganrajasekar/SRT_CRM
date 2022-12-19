<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>General Report</title>
    <!-- CSS only -->
    <style>
    table.print-friendly tr td, table.print-friendly tr th {
        page-break-inside: avoid !important;
    }
    table {
            width: 100%;
        }
        table, th, td {
            border: solid 1px #DDD;
            border-collapse: collapse;
            padding: 2px 3px;
            text-align: left;
        }
</style>
</head>
<body>
<?php include '../includes/db.php'?>


<?php
$start = $_GET["start"];
$end = $_GET["end"];

$sql = "SELECT * FROM bill where DATE(reg_date) BETWEEN '$start' AND '$end' order by id DESC";

$result = $conn->query($sql);
$i=1;
if ($result->num_rows > 0) {
    ?>
    <h2 style="text-align:center;margin:30px;text-decoration:underline">General Report</h2>

    <table style="width:auto !important">
        <tbody>
            <tr>
                <th>Total Invoices :</th>
                <td> 10 </td>
            </tr>
            <tr>
                <th>Total Collection :</th>
                <td> 10 </td>
            </tr>
            <tr>
                <th>Total Paid Amount :</th>
                <td> 10 </td>
            </tr>
            <tr>
                <th>Total Due Amount :</th>
                <td> 10 </td>
            </tr>
            <tr>
                <th>Total New Clients :</th>
                <td> 10 </td>
            </tr>
        </tbody>
    </table>
    <br>
    <div class="table-responsive">
    <table class="print-friendly table container table-striped table-bordered">
        <thead>
            <tr>
                <th class="border-top-0">S.No</th>
                <th class="border-top-0">Invoice No.</th>
                <th class="border-top-0">Payment Method</th>
                <th class="border-top-0">Date</th>
                <th class="border-top-0">Total Amount</th>
                <th class="border-top-0">Paid Amount</th>
                <th class="border-top-0">Balance Amount</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
        <?php
            while($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo($i)?></td>
            <td><?php echo($row['id'])?></td>
            <td><?php echo($row['payment'])?></td>
            <td><?php echo($row['reg_date'])?></td>
            <td>₹ <?php echo($row['total'])?></td>
            <td>₹ <?php echo($row['paid'])?></td>
            <td>₹ <?php echo($row['total']-$row['paid'])?></td>
        </tr>
        <?php
            $i++;
            }
        ?>
        </tbody>
    </table>
        
<?php
} else {
    echo "<p style='text-align:center'>No Payments Found</p>";
}
$conn->close();
?>
<script>
// print()
</script>
</body>
</html>