<?php
	session_start();
	include_once('config.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM `petition` WHERE `id` = '".$_GET['id']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
		     $_SESSION['success_message'] = "Deleted successfully.";
            header("Location: petition-page-list.php");
            exit();
            
		
		}
	
		//use for MySQLi Procedural
	 if(mysqli_query($conn, $sql)){
		$_SESSION['success'] = 'Petition deleted successfully';
	 }
		
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting Petition';
		}
	}
	else{
		$_SESSION['error'] = 'Select Petition to delete first';
	}

	header('location:https://therookeysaint.org/admin-dashboard/petition-page-list.php');
?>