<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

if(isset($_GET['id'])){

	require('config.php');

	$partner_id = $_GET['id'];
	
	$sql = "UPDATE `partner_details` SET `status` ='Approved' WHERE `id` =".$partner_id;
	$res1 = $conn->query($sql);

	$sql2 = "SELECT `mobile_number` FROM `partner_details` WHERE `id` =".$partner_id;
	//echo $sql2; exit;
	$res2 = $conn->query($sql2);	

	$row = $res2->fetch_assoc();

	$mob_no = $row['mobile_number'];	
		
	$data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
	$randomPwd = substr(str_shuffle($data), 0, 5);
	  
	$sql3 = "INSERT INTO `users` ( `user_type`, `partner_id`, `email`,  `password`) 
			VALUES ('User', '".$partner_id."', '".$mob_no."', '".$randomPwd."')";

	$query = $conn->query($sql3);
	
	// Instantiation and passing `true` enables exceptions
	$mail = new PHPMailer(true);

	try {
		//Server settings
		$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output	
	   // $mail->isSMTP();                                            // Send using SMTP   
		$mail->Host       = 'smtp.mailtrap.io';                    // Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		$mail->Username   = '41543854df98bc';                     // SMTP username
		$mail->Password   = '45e3bcbc4f02b0';                               // SMTP password
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
		$mail->Port       = 2525;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

		//Recipients
		$mail->setFrom('estudcorporations@gmail.com', 'Mohan Raj');
		$mail->addAddress($email, $email);     // Add a recipient
		
		$mail->addReplyTo('estudcorporations@gmail.com', 'Mohan Raj');
		
		// Content
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject =  APPNAME. ' - You have been approved as a Partner';			
	
		$mail->Body    = 'Hello User! <br><br> We are glad to inform you that based on your appplication on interest for being channel partner! 
		<br> <h4>You have been selected as Freelance Channel Patner!!!</h4> For period of 12 months from date of approval.  
		<br> <br> Your login details <br> http://bodhisatsang.com/bodhi-admin/ <br> <strong>Username:</strong> '.$email.' <br>  <strong>Password:</strong> '.$randomPwd.'<br><br>
		Alert: This is an automatic email. Do not reply!';
		
		print_r($mail->Body); exit;
		
		$mail->AltBody = 'An email has been sent to the Partner';

		$mail->send();
		
		header("location:success.php?m=2");

		
	} catch (Exception $e) {
		
		header("location:success.php?m=0");

	}

}
?>
    