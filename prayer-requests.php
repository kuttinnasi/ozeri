<?php 
session_start();
include 'config.php';

$msg = "";
$errorMsg = "";
$recaptchaError = "";

// Preserve old values
$old_name = "";
$old_email = "";
$old_phone_number = "";
$old_message = "";

// Check for flash messages and old inputs
if(isset($_SESSION['success_msg'])){
    $msg = $_SESSION['success_msg'];
    unset($_SESSION['success_msg']);
}
if(isset($_SESSION['error_msg'])){
    $errorMsg = $_SESSION['error_msg'];
    unset($_SESSION['error_msg']);
}
if(isset($_SESSION['recaptcha_error'])){
    $recaptchaError = $_SESSION['recaptcha_error'];
    unset($_SESSION['recaptcha_error']);
}
if(isset($_SESSION['old_inputs'])){
    $old_inputs = $_SESSION['old_inputs'];
    $old_name = isset($old_inputs['name']) ? htmlspecialchars($old_inputs['name']) : '';
    $old_email = isset($old_inputs['email']) ? htmlspecialchars($old_inputs['email']) : '';
    $old_phone_number = isset($old_inputs['phone_number']) ? htmlspecialchars($old_inputs['phone_number']) : '';
    $old_message = isset($old_inputs['message']) ? htmlspecialchars($old_inputs['message']) : '';
    unset($_SESSION['old_inputs']);
}

if(isset($_POST['submit_prayer_request'])){
    // reCAPTCHA validation
    $recaptcha_secret = '6LfxbVssAAAAAIebPV_2dRwUniaSO_fJtlqsmKmR';
    $recaptcha_response = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : '';
    
    // Preserve submitted values
    $old_name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $old_email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $old_phone_number = isset($_POST['phone_number']) ? htmlspecialchars($_POST['phone_number']) : '';
    $old_message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';
    
    if(empty($recaptcha_response)){
        $_SESSION['error_msg'] = "Please complete the reCAPTCHA verification.";
        $_SESSION['recaptcha_error'] = "Please complete the reCAPTCHA verification.";
        $_SESSION['old_inputs'] = $_POST;
        header("Location: prayer-requests.php");
        exit;
    } else {
        // Verify reCAPTCHA
        $verify_url = 'https://www.google.com/recaptcha/api/siteverify';
        $verify_data = array(
            'secret' => $recaptcha_secret,
            'response' => $recaptcha_response,
            'remoteip' => $_SERVER['REMOTE_ADDR']
        );
        
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($verify_data)
            )
        );
        
        $context  = stream_context_create($options);
        $verify_response = file_get_contents($verify_url, false, $context);
        $response_data = json_decode($verify_response);
        
        if(!$response_data->success){
            $_SESSION['error_msg'] = "reCAPTCHA verification failed. Please try again.";
            $_SESSION['recaptcha_error'] = "reCAPTCHA verification failed. Please try again.";
            $_SESSION['old_inputs'] = $_POST;
            header("Location: prayer-requests.php");
            exit;
        } else {
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
            $message = mysqli_real_escape_string($conn, $_POST['message']);

            if(empty($name) || empty($email) || empty($message)){
                $_SESSION['error_msg'] = "Please fill in all required fields.";
                $_SESSION['old_inputs'] = $_POST;
                header("Location: prayer-requests.php");
                exit;
            } else {
                $sql = "INSERT INTO prayer_request (name, email, phone_number, message) VALUES ('$name', '$email', '$phone_number', '$message')";
                if(mysqli_query($conn, $sql)){
                    $_SESSION['success_msg'] = "Your prayer request has been submitted successfully.";
                    header("Location: prayer-requests.php");
                    exit;
                } else {
                    $_SESSION['error_msg'] = "Error: " . mysqli_error($conn);
                    $_SESSION['old_inputs'] = $_POST;
                    header("Location: prayer-requests.php");
                    exit;
                }
            }
        }
    }
}


?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <title>Prayer Requests &#8211; Fr Peter Mary Rookey</title>
    <meta name="description" content="Send your prayer intention requests to the International Compassion Ministry of Fr. Peter Mary Rookey." />
    <?php include 'includes/head-links.php'; ?>
    <style>
        .prayer-request-section {
            /* padding: 40px 0; */
            background: #fff;
        }
        .form-wrapper {
            background-color: #eee;
            padding: 50px 25px;
            box-shadow: 0px 1px 20px rgba(0, 0, 0, .2);
            border-radius: 10px;
            margin-bottom: 40px;
            /* max-width: 900px; */
            margin-left: auto;
            margin-right: auto;
        }
        .form-label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            font-weight: 700;
            color: #333;
        }
        .form-label span {
            color: red;
        }
        .form-control {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            background: #fff;
            margin-bottom: 20px;
        }
        .form-row {
            display: flex;
            gap: 20px;
        }
        .form-group {
            flex: 1;
        }
        textarea.form-control {
            height: 150px;
            resize: vertical;
        }
        .btn-submit {
            background: #1a4b7e;
            color: #fff;
            border: none;
            padding: 12px 35px;
            border-radius: 4px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
            display: block;
            margin: 0 auto;
        }
        .btn-submit:hover {
            background: #153856;
        }
        
        .instruction-text {
            /* max-width: 900px; */
            margin: 0 auto;
            line-height: 1.6;
            color: #444;
            text-align: center;
        }
        .instruction-text p {
          margin-bottom: 15px;
          text-align: left;
        }
        .contact-info {
            margin-top: 30px;
            font-weight: 400;
            color: #333;
            margin-bottom: 30px;
        }
        .contact-info strong {
          display: block;
          margin-bottom: 15px;
          font-weight: 700;
        }

        .captcha-placeholder {
          background: #fff;
          border: 1px solid #d3d3d3;
          border-radius: 3px;
          padding: 10px;
          display: inline-block;
          margin-bottom: 20px;
        }
        
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }
        .alert-success {
            color: #3c763d;
            background-color: #dff0d8;
            border-color: #d6e9c6;
        }
        .alert-danger {
            color: #a94442;
            background-color: #f2dede;
            border-color: #ebccd1;
        }

        @media (max-width: 768px) {
            .form-row {
                flex-direction: column;
                gap: 0;
            }
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main class="prayer-request-section">
        <div class="container">
            <h1 class="blog-title">Prayer Requests</h1>
            
            <div class="form-wrapper">
                <?php if($msg): ?>
                    <div class="alert alert-success"><?php echo $msg; ?></div>
                <?php endif; ?>
                <?php if($errorMsg): ?>
                    <div class="alert alert-danger"><?php echo $errorMsg; ?></div>
                <?php endif; ?>

                <form action="prayer-requests.php" method="POST">
                    <div class="form-group">
                        <label class="form-label">Name <span>*</span></label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Your Name" value="<?php echo $old_name; ?>" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Email (Not For Public Display) <span>*</span></label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Your Email" value="<?php echo $old_email; ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Phone Number (Not For Public Display) <span>*</span></label>
                            <input type="tel" name="phone_number" class="form-control" placeholder="Phone Number" maxlength="25" value="<?php echo $old_phone_number; ?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Prayer Request Message <span>*</span></label>
                        <textarea name="message" class="form-control" placeholder="Prayer Request" required><?php echo $old_message; ?></textarea>
                    </div>

                    <div class="form-group" style="margin-bottom: 20px;">
                        <div class="g-recaptcha" data-sitekey="6LfxbVssAAAAABV456Z8wZy7veDL6DY4XY1LS8MT" data-callback="recaptchaCallback"></div>
                        <?php if($recaptchaError): ?>
                            <div class="feedback-error" style="color:#dc3545; font-size:0.85rem; margin-top:5px;">
                                <?php echo $recaptchaError; ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <button type="submit" name="submit_prayer_request" class="btn-submit">Submit</button>
                </form>
            </div>

            <div class="instruction-text">
                <p><strong><a href="prayer-request-entries.php" style="color: #1a4b7e;">Click Here</a></strong> to read all Prayer Requests</p>
                
                <p>Please send any prayer intention requests you have to us, using the contact information below. We'll be sure to remember you and your loved ones in our prayers and will beg the intercession of our uncle, Fr. Peter, for you as well. Father once voiced to us his hope that his International Compassion Ministry could somehow continue beyond his death. We pray that, through this website, his wish will be, in some humble way, realized.</p>

                <div class="contact-info">
                    <strong>Timothy Peter & Anne Elizabeth Rookey</strong>
                    
                    2040 Allen Blvd #6<br>
                    Middleton, WI 53562<br>
                    (608) 218-1303
                </div>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/script-links.php'; ?>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        // Hide error messages after 6 seconds
        setTimeout(function() {
            var alerts = document.querySelectorAll('.alert-success, .alert-danger');
            alerts.forEach(function(alert) {
                alert.style.display = 'none';
            });
        }, 6000);

        // Clear reCAPTCHA error when user completes reCAPTCHA
        function recaptchaCallback() {
            var recaptchaError = document.querySelector('.feedback-error');
            if (recaptchaError) {
                recaptchaError.style.display = 'none';
            }
            // Also hide the top error message if it's a reCAPTCHA error
            var topError = document.querySelector('.alert-danger');
            if (topError && (topError.textContent.includes('reCAPTCHA') || topError.textContent.includes('CAPTCHA'))) {
                topError.style.display = 'none';
            }
        }

        // Hide errors when user starts typing
        document.addEventListener('DOMContentLoaded', function() {
            var formInputs = document.querySelectorAll('input, textarea, select');
            formInputs.forEach(function(input) {
                input.addEventListener('input', function() {
                    var topError = document.querySelector('.alert-danger');
                    if (topError) {
                        topError.style.opacity = '0.5';
                    }
                });
            });
        });
    </script>
</body>
</html>
