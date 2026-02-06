<?php
	session_start();
	include_once('config.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM  prayer_request WHERE id = '".$_GET['id']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
		     $_SESSION['success_message'] = "Deleted successfully.";
            header("Location: prayer-request-list.php");
            exit();
            
		
		}
	
		//use for MySQLi Procedural
	 if(mysqli_query($conn, $sql)){
		$_SESSION['success'] = 'Member deleted successfully';
	 }
		
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting member';
		}
	}
	else{
		$_SESSION['error'] = 'Select student to delete first';
	}

	header('location:https://therookeysaint.org/admin-dashboard/prayer-request-list.php');
?>