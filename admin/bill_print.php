<?php include 'includes/db.php'?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bill</title>
    <link rel="stylesheet" href="/admin/css/stylebill.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="/static/images/logo.png">
      </div>
      <h1>INVOICE 3-2-1</h1>
      <div id="company" class="clearfix">
        <div>Company Name</div>
        <div>455 Foggy Heights,<br /> AZ 85004, US</div>
        <div>(602) 519-0450</div>
        <div><a href="mailto:company@example.com">company@example.com</a></div>
      </div>
      <div id="project">
        <div><span>PROJECT</span> Website development</div>
        <div><span>CLIENT</span> John Doe</div>
        <div><span>ADDRESS</span> 796 Silver Harbour, TX 79273, US</div>
        <div><span>EMAIL</span> <a href="mailto:john@example.com">john@example.com</a></div>
        <div><span>DATE</span> August 17, 2015</div>
        <div><span>DUE DATE</span> September 17, 2015</div>
      </div>
    </header>
    <main>
        <?php
        $id = $_GET["id"];
        $sql = "SELECT * FROM bill where id='$id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {

        ?>
      <table>
        <thead>
          <tr>
            <th class="service">S.No</th>
            <th class="desc">Product</th>
            <th>PRICE</th>
            <th>QTY</th>
            <th>TOTAL</th>
          </tr>
        </thead>
        <tbody>
            <?php
            while($row = $result->fetch_assoc()) {
                $data = json_decode($row["items"]);
                foreach($data as $item){
            ?>
            <tr>
                <td class="service"><?php echo($item[0])?></td>
                <td class="desc"><?php echo($item[0])?></td>
                <td class="unit"><?php echo($item[2])?></td>
                <td class="qty"><?php echo($item[1])?></td>
                <td class="total"><?php echo($item[3])?></td>
            </tr>
          <?php } ?>
          <tr>
            <td colspan="4" class="grand total">GRAND TOTAL</td>
            <td class="grand total"><?php echo($row["total"]) ?></td>
          </tr>
        </tbody>
      </table>
      <?php }} ?>
    </main>
  </body>
</html>