<?php
  session_start();
  include_once('config.php');

  if(isset($_POST['add'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $message = $_POST['message'];


    $sql = "INSERT INTO prayer_request(name,email,phone_number,message) VALUES ('$name','$email','$phone_number','$message')";
//print_r($sql);exit;

    
    if($conn->query($sql)){
       $query = "SELECT * FROM prayer_request WHERE email='$email'";
           $results = mysqli_query($conn, $query);
           header('location:https://therookeysaint.org/prayer-requests///?msg=success');

      
    }
    
    
    
    else {
          header('location:https://therookeysaint.org/prayer-requests///?msg=success');
        }
  }
  
  
?>