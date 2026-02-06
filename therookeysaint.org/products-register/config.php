<?php session_start();

$conn = new mysqli("db5006802481.hosting-data.io", "dbu2456403", "QQa70@J6Ro2w", "dbs5618157");

if ($conn->connect_error) {
    die("DB Error");
}


function checkLogin() {
    if (!isset($_SESSION['admin_id'])) {
        header("Location: login.php");
        exit;
    }
}
