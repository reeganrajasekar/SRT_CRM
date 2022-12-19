<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Report</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<?php include '../includes/db.php'?>
<h2 style="text-align:center;margin:30px;text-decoration:underline">Product Report</h2>
<div class="table-responsive">
<?php
$sql = "SELECT * FROM product order by stock DESC";
$result = $conn->query($sql);
$i=1;
if ($result->num_rows > 0) {
?>
    <table class="table container table-striped table-bordered">
        <thead>
            <tr>
                <th class="border-top-0">S.No</th>
                <th class="border-top-0">Code</th>
                <th class="border-top-0">Product Name</th>
                <th class="border-top-0">Prize</th>
                <th class="border-top-0">Stock</th>
            </tr>
        </thead>
        <tbody>
        <?php
            while($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo($i)?></td>
            <td><?php echo($row['code'])?></td>
            <td><?php echo($row['name'])?></td>
            <td>₹<?php echo($row['rate'])?></td>
            <td><?php echo($row['stock'])?></td>
        </tr>
        <?php
            $i++;
            }
        ?>
        </tbody>
    </table>
        
<?php
} else {
    echo "<p style='text-align:center'>No Products Found</p>";
}
$conn->close();
?>
    <script>
print()
</script>
</body>
</html>