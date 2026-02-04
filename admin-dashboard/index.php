<?php 
	session_start();

	require('config.php');
	
	include_once('common.php');

	
	
	if(isset($_POST['submit'])) {

		if((isset($_POST['email']) && $_POST['email'] !='') && (isset($_POST['password']) && $_POST['password'] !=''))	{
			
			$email = trim($_POST['email']);
			//$password = md5($_POST['password']);
			$password = $_POST['password'];
			
			//echo $password; exit;

			$sqlEmail = "SELECT * FROM `users` WHERE `email` = '".$email."'";
		
			 //echo $sqlEmail; exit;

			$rs = mysqli_query($conn, $sqlEmail);

			//print_r($rs); exit;

			$numRows = mysqli_num_rows($rs);
			
			//echo $numRows; exit;

			if($numRows  == 1) 	{

				$row = mysqli_fetch_assoc($rs);
				
				//print '<pre>';				print_r($row); exit;
				//echo $row['password']; exit;

				if($password == $row['password'])	{

					$_SESSION['user_id'] = $row['id'];
					//$_SESSION['first_name'] = $row['first_name'];
					$_SESSION['partner_id'] = $row['partner_id'];
					$_SESSION['user_type'] = $row['user_type'];
					
				    if ($_SESSION['user_type'] == 'Admin') {

						header('location:petition-page-list.php');

					} else {

						header('location:user_dashboard.php');

					}

				    exit;
					
				} else {

					$errorMsg =  "Invalid Email or Password!";

				}

			} else {

				$errorMsg =  "Email is not found";

			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo defined('APPNAME') ? APPNAME : 'Dashboard'; ?> - Login</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .header-bar {
            background-color: #1a4b7e; /* Dark Blue from screenshot */
            color: white;
            padding: 15px 20px;
            font-size: 18px;
            font-weight: 600;
        }

        .login-container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .login-box {
            background-color: #e0e0e0; /* Light gray background for the card container */
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
            overflow: hidden;
            padding: 10px; /* Outer spacing */
        }
        
        .login-box-inner {
            background-color: #f9f9f9; /* White/Lighter gray inner */
            border-radius: 10px;
            padding: 30px;
            border: 1px solid #ccc;
        }

        .login-title {
            font-size: 18px;
            font-weight: 600;
            color: #333;
            margin-bottom: 25px;
            /* Border bottom isn't in screenshot but typical, screenshot shows just text */
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box; /* Ensure padding doesn't affect width */
            background-color: white;
        }

        .form-control:focus {
            outline: none;
            border-color: #1a4b7e;
        }

        .btn-login {
            display: block;
            width: 100%; /* Or auto width centered */
            width: auto;
            min-width: 100px;
            background-color: #2980b9; /* Blue button */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            margin: 0 auto;
            text-align: center;
        }

        .btn-login:hover {
            background-color: #2471a3;
        }

        .btn-container {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
        }
        
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="header-bar">
        Fr Peter Mary Rookey
    </div>

    <div class="login-container">
        <div class="login-box">
             <!-- Error Message -->
             <?php if(isset($errorMsg)){ ?>
                <div class="alert alert-error">
                    <strong>Error :</strong> <?php echo $errorMsg; ?>
                </div>
            <?php unset($errorMsg); } ?>
             <?php if(isset($_GET['logout']))	{ ?>
					<div class="alert alert-success">
					<strong>Success!</strong> You have successfully logout. 
					</div>
			<?php } ?>

            <div class="login-box-inner">
                <div class="login-title">Log In</div>
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Enter Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Enter Your Password" required>
                    </div>
                    <div class="btn-container">
                        <button type="submit" name="submit" class="btn-login">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>