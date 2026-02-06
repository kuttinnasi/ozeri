<?php
require 'config.php';
checkLogin();

if (!empty($_POST['ids'])) {
    $ids = implode(",", array_map('intval', $_POST['ids']));
    $conn->query("UPDATE products_register SET deleted_at=NOW() WHERE id IN ($ids)");
}
header("Location: dashboard.php");
