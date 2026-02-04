<?php
      
include_once('common.php');
$id = $_GET['id'];

//require('config.php');
//$sql = "UPDATE `estud-parner`SET status='approved ' where id=".$_GET['id'];
//$query = $conn->query($sql);

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output	

    // This comment helped to relay email in server xxx
   // $mail->isSMTP();                                            // Send using SMTP   
    $mail->Host       = 'smtp.mailtrap.io';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = '41543854df98bc';                     // SMTP username
    $mail->Password   = '45e3bcbc4f02b0';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 2525;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('jaikumar26317@boscoits.com', 'jai');
     $mail->addAddress('jaikavi2631@gmail.com', 'jai');     // Add a recipient
    $mail->addReplyTo('jaikavi2631@gmail.com', 'jai', 'jai');


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'SEDOS - Approve Membership';		
	
  
    $mail->Body    = 'Dear Admin!, <br/><br/> Please review the below Register details and approve further to submit the Register details<br><br> 	
	<a href="https://scindea.org/support-us/scindea-admin/support-page-view-details.php?id='.$id.'" target="_blank"> Click here view</a> <br> <br><br>Alert: This is an automatic email. Do not reply!';
	
	//print_r($mail->Body); exit;
	
    $mail->AltBody = 'An email has been to sent Admin - Scindea.';

    $mail->send();
	
    
    header("location:success.php?m=1");
    /* 
    echo '<p>&nbsp;</p>';
    echo '<p>Message has been sent</p> <br/>';
	
	echo '<p>&nbsp;</p>';
	echo '<p><a href="dashboard.php">Back</a></p>';
	echo '<p>&nbsp;</p>'; */
	
} catch (Exception $e) {

    header("location:success.php?m=0");
    
   /*  echo "Email Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	echo '<p>&nbsp;</p>';
	echo '<p><a href="dashboard.php">Back</a></p>'; */
}

?>   
