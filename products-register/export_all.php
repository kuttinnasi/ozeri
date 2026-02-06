<?php
require 'config.php';
checkLogin();

header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=product_registrations.xls");

echo "<table border='1'>";
echo "<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>City</th>
        <th>State</th>
        <th>Country</th>
        <th>Product 1</th>
        <th>Product 2</th>
        <th>SKU 1</th>
        <th>Purchase Date</th>
        <th>Status</th>
        <th>Created At</th>
      </tr>";

$q = $conn->query("
  SELECT * FROM products_register
  WHERE deleted_at IS NULL
  ORDER BY id DESC
");

while ($row = $q->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['phone']}</td>
        <td>{$row['address_1']}</td>
        <td>{$row['city']}</td>
        <td>{$row['state']}</td>
        <td>{$row['country']}</td>
        <td>{$row['product1']}</td>
        <td>{$row['product2']}</td>
        <td>{$row['product_sku1']}</td>
        <td>{$row['purchase_date1']}</td>
        <td>{$row['status']}</td>
        <td>{$row['created_at']}</td>
    </tr>";
}

echo "</table>";
exit;
