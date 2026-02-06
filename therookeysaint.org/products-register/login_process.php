<?php
require 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$q = $conn->prepare("SELECT * FROM admin_users WHERE username=?");
//echo 'ffffffffffffff33333';exit;
$q->bind_param("s", $username);
$q->execute();
$res = $q->get_result();

//echo password_hash('admin123', PASSWORD_DEFAULT);
//exit;
if ($res->num_rows == 1) {
    $row = $res->fetch_assoc();
 
   /*  echo $password;
    echo $row['password'];  
    exit; */
    if (password_verify($password, $row['password'])) {
        $_SESSION['admin_id'] = $row['id'];
        header("Location: dashboard.php");
        exit;
    }
}
header("Location: login.php?error=1");
