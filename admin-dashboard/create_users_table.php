<?php
require('config.php');

// Create Users Table
$sql = "CREATE TABLE IF NOT EXISTS `users` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `user_type` varchar(50) NOT NULL DEFAULT 'Partner',
    `partner_id` varchar(50) DEFAULT NULL,
    `first_name` varchar(100) DEFAULT NULL,
    `last_name` varchar(100) DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

if (mysqli_query($conn, $sql)) {
    echo "Table users created successfully.\n";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "\n";
}

// Insert Admin User
$email = 'admin@therookeysaint.com';
$password = 'Admin@2026';
$user_type = 'Admin';

// Check if admin exists
$check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
if(mysqli_num_rows($check) == 0) {
    $insert = "INSERT INTO `users` (`email`, `password`, `user_type`, `first_name`, `partner_id`) VALUES ('$email', '$password', '$user_type', 'Admin', '0')";
    if(mysqli_query($conn, $insert)){
        echo "Admin user inserted.\n";
    } else {
        echo "Error inserting admin: " . mysqli_error($conn) . "\n";
    }
} else {
    // Update password if exists
    $update = "UPDATE `users` SET `password`='$password', `user_type`='$user_type' WHERE `email`='$email'";
    mysqli_query($conn, $update);
    echo "Admin user updated.\n";
}
?>
