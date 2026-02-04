<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is comming from a form

	 // echo'<pre>';print_r($_POST); die;
	
	$exact_name = filter_var($_POST["exact_name"], FILTER_SANITIZE_STRING);
	$abbreviation = filter_var($_POST["abbreviation"], FILTER_SANITIZE_STRING);
	$address = filter_var($_POST["address"], FILTER_SANITIZE_STRING);
	$members = filter_var($_POST["members"], FILTER_SANITIZE_STRING);
	$name_of_superior = filter_var($_POST["name_of_superior"], FILTER_SANITIZE_STRING);
	$email_of_superior = filter_var($_POST["email_of_superior"], FILTER_SANITIZE_STRING);
	$name_of_secretary = filter_var($_POST["name_of_secretary"], FILTER_SANITIZE_STRING);
	$email_of_secretary = filter_var($_POST["email_of_secretary"], FILTER_SANITIZE_STRING);
	$name_of_delegate = filter_var($_POST["name_of_delegate"], FILTER_SANITIZE_STRING);
	$email_of_delegate = filter_var($_POST["email_of_delegate"], FILTER_SANITIZE_STRING);
	$website = filter_var($_POST["website"], FILTER_SANITIZE_STRING);
	$brief = filter_var($_POST["brief"], FILTER_SANITIZE_STRING);
	

	//echo 'test';exit;
	//echo'<pre>';print_r($conn); die;
	$statement = $conn->prepare("INSERT INTO membership_form (name_of_the_congregation, abbreviation_of_the_congregation, address_of_the_congregation, number_of_members, name_of_the_superior_general, email_of_the_superior_general, name_of_the_secretary_general, email_of_the_secretary_general, name_of_delegate_for_sedos, email_of_the_delegate_for_sedos, website_address, brief_of_congregation_society) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"); //prepare sql insert query
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('sssissssssss', $exact_name, $abbreviation, $address, $members, $name_of_superior, $email_of_superior, $name_of_secretary, $email_of_secretary, $name_of_delegate, $email_of_delegate, $website, $brief); //bind values and execute insert query
	// echo $mysqli->error; die;
	
	if($statement->execute()){
	    
	    
	    
	    
	$to = 'jaikumar26317@boscoits.com'; // this is your Email address
    $from = 'praveen@boscoits.com'; // this is the sender's Email address
    $exact_name = $exact_name;
    $abbreviation = $abbreviation;
    $address = $address;
    $members = $members;
    $name_of_superior = $name_of_superior;
    $email_of_superior = $email_of_superior;
    $name_of_secretary = $name_of_secretary;
    $email_of_secretary = $email_of_secretary;
    $name_of_delegate = $name_of_delegate;
    $email_of_delegate = $email_of_delegate;
    $website = $website;
    $brief = $brief;
        
   $message = '<div class="header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <p style="    color: #fff9f9;
                        text-align: center;
                        font-weight: bold;
                        font-size: 20px;
                        padding: 1%;
                        margin-bottom: 1px;
                        background-color: #cc164d;">APPLICATION FORM FOR MEMBERSHIP</p>
        </div>
      </div>
    </div>
  </div>
  
  <div class="form">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="registration">
            <style>
              td,th{
                padding: 15px;
              }
            </style>
            <table>
              <tr>
                <td style="width:450px;"><strong>Exact Name of the Congregation</strong></td>
                <td style="width:100px;">-</td>
                <td style="width:300px;">'.$exact_name.'</td>
              </tr>
              <tr>
                <td><strong>Abbreviation of the Congregation</strong></td>
                <td>-</td>
                <td>'.$abbreviation.'</td>
              </tr>
              <tr>
                <td><strong>Address of the Generalate House of the Congregation</strong></td>
                <td>-</td>
                <td>'.$address.'</td>
              </tr>
              <tr>
                <td><strong>Total Number of Members</strong></td>
                <td>-</td>
                <td>'.$members.'</td>
              </tr>
              <tr>
                <td><strong>Name of the Superior General </strong></td>
                <td>-</td>
                <td>'.$name_of_superior.'</td>
              </tr>
              <tr>
                <td><strong>Name of Secretary General</strong></td>
                <td>-</td>
                <td>'.$name_of_secretary.'</td>
              </tr>
              <tr>
                <td><strong>Name of the Delegate for SEDOS</strong></td>
                <td>-</td>
                <td>'.$name_of_delegate.'</td>
              </tr>
              <tr>
                <td><strong>Website Address of the Congregation </strong></td>
                <td>-</td>
                <td>'.$website.'</td>
              </tr>
              <tr>
                <td><strong>Official Email of the Superior General</strong></td>
                <td>-</td>
                <td>'.$email_of_superior.'</td>
              </tr>
              <tr>
                <td><strong>Official Email of Secretary General</strong></td>
                <td>-</td>
                <td>'.$email_of_secretary.'</td>
              </tr>
              <tr>
                <td><strong>Email of the Delegate for SEDOS</strong></td>
                <td>-</td>
                <td>'.$email_of_delegate.'</td>
              </tr>

              <tr>
                <td><strong>Brief Aim of your Congregation / Society </strong></td>
                <td>-</td>
                <td>'.$brief.'</td>
              </tr>           
            </table>
          </div>        
                  
        </div>
      </div>
    </div>
  </div>
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <p style="    color: #fff9f9;
                        text-align: center;
                        font-size: 20px;
                        padding: 1%;
                        background-color: #cc164d;">Copyright © 2020 SEDOS. Allrights Reserved. Powered by <a href="https://www.boscosofttech.com/" target="_blank">BoscoSoft Technologies</a></p>
        </div>
      </div>
    </div>
  </div>';
  
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message2 = $exact_name . " wrote the following:";

        // Insert query 
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


    $headers .= "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    header("location:http://boscoits.com/staging/sedos/about/#how-to-member");
 		
		// print "Hello !, your message has been saved!"; exit;
	}else{
		print $conn->error; //show mysql error if any
	}
}
?>