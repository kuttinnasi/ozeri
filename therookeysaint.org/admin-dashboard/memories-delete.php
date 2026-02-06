<?php 
session_start();
require('config.php');

if(!isset($_SESSION['user_id'])) {
    header('location:index.php');
    exit;
}

if(isset($_GET['id'])) {
    $id = intval($_GET['id']);
    
    // Optional: Get file path to delete file too?
    // $sql = "SELECT file_path FROM testimonials WHERE id = $id";
    // ... unlink ...
    
    $sql = "DELETE FROM `testimonials` WHERE `id` = $id";
    if($conn->query($sql)) {
        header('location:memories-list.php?msg=deleted');
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    header('location:memories-list.php');
}
?>
