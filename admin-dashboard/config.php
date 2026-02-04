<?php
    $whitelist = array(
        '127.0.0.1',
        '::1'
    );

    if((isset($_SERVER['REMOTE_ADDR']) && in_array($_SERVER['REMOTE_ADDR'], $whitelist)) || php_sapi_name() === 'cli'){
        // Localhost connection settings
        $host = 'localhost';
        $DBUser = 'root';
        $DBPassword = '';
        $db = 'fr_rookey_local';
    } else {
        // Remote connection settings
        $host = 'db5006791731.hosting-data.io';
        $DBUser = "dbu2721410";
        $DBPassword = 'rookey@admin2022';
        $db = 'dbs5611998';
    }
	
	$conn = mysqli_connect($host,$DBUser, $DBPassword, $db);
	
	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit();
  	}

    if (!defined('APPNAME')) define('APPNAME', 'Fr. Peter Mary Rookey');
    if (!defined('BASE_URL')) define('BASE_URL', 'http://localhost/Ozeri/Frrookysaint'); 
?>