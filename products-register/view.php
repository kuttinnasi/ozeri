<?php
require 'config.php';
checkLogin();

$id = intval($_GET['id']);
$row = $conn->query("SELECT * FROM products_register WHERE id=$id")->fetch_assoc();
?>

<div class="row">
  <div class="col-md-6">
    <p><b>Name:</b> <?= $row['name'] ?></p>
    <p><b>Email:</b> <?= $row['email'] ?></p>
    <p><b>Phone:</b> <?= $row['phone'] ?></p>
    <p><b>City:</b> <?= $row['city'] ?></p>
    <p><b>State:</b> <?= $row['state'] ?></p>
    <p><b>Country:</b> <?= $row['country'] ?></p>
  </div>

  <div class="col-md-6">
    <p><b>Purchased From:</b> <?= $row['purchased_from'] ?></p>
    <p><b>Product 1:</b> <?= $row['product1'] ?></p>
    <p><b>Product 2:</b> <?= $row['product2'] ?></p>
    <p><b>SKU 1:</b> <?= $row['product_sku1'] ?></p>
    <p><b>Purchase Date:</b> <?= $row['purchase_date1'] ?></p>
    <p><b>Status:</b> <?= $row['status'] ?></p>
  </div>
</div>
