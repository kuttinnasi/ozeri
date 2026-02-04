<?php
// Detect protocol (http or https)
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$domain = $_SERVER['HTTP_HOST'];

// Check if running on the online domain
if ($domain === 'therookeysaint.org' || $domain === 'www.therookeysaint.org') {
    // Online Configuration
    define('BASE_URL', 'https://therookeysaint.org');
    
    $host = 'db5006791731.hosting-data.io';
    $DBUser = 'dbu2721410';
    $DBPassword = 'rookey@admin2022';
    $db = 'dbs5611998';
} else {
    // Local Configuration
    define('BASE_URL', $protocol . $domain . '/Ozeri/Frrookysaint');
    
    $host = '127.0.0.1';
    $DBUser = "root";
    $DBPassword = '';
    $db = 'fr_rookey_local';
}

$conn = mysqli_connect($host, $DBUser, $DBPassword, $db);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    // Hint for the user if the DB doesn't exist yet
    if(mysqli_connect_errno() == 1049) { // Unknown database
        echo "<br><strong>Tip:</strong> The database '$db' does not exist. <a href='setup_local_db.php'>Click here to create it automatically</a>.";
    }
    exit();
}