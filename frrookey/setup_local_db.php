<?php
// setup_local_db.php
$host = 'localhost';
$user = 'root';
$pass = '';

// 1. Connect to MySQL Server (no database selected yet)
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error . "<br>Please ensure your local MySQL server (Laragon) is running and the password for 'root' is empty.");
}

// 2. Create Database
$dbname = 'fr_rookey_local';
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database '$dbname' created successfully or already exists.<br>";
} else {
    die("Error creating database: " . $conn->error);
}

// 3. Select Database
$conn->select_db($dbname);

// 4. Create Petition Table
$tableSql = "CREATE TABLE IF NOT EXISTS petition (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    country VARCHAR(100) NOT NULL,
    state VARCHAR(100) DEFAULT NULL,
    other_state VARCHAR(100) DEFAULT NULL,
    email VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($tableSql) === TRUE) {
    echo "Table 'petition' created successfully or already exists.<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

// 5. Create Prayer Request Table (Since it was referenced in other files found earlier)
$prayerSql = "CREATE TABLE IF NOT EXISTS prayer_request (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    lname VARCHAR(255) DEFAULT NULL,
    email VARCHAR(255) NOT NULL,
    phone_number VARCHAR(50) DEFAULT NULL,
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($prayerSql) === TRUE) {
    echo "Table 'prayer_request' created successfully or already exists.<br>";
} else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();

echo "<br><strong>Setup Complete!</strong><br>You can now use the forms.";
?>
