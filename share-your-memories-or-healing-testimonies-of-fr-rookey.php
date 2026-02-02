<?php 
session_start();
include 'config.php';

$msg = "";
$errorMsg = "";
$recaptchaError = "";

// Preserve old values
$old_name = "";
$old_email = "";
$old_phone = "";
$old_testimony = "";

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
    $old_phone = isset($old_inputs['phone']) ? htmlspecialchars($old_inputs['phone']) : '';
    $old_testimony = isset($old_inputs['testimony']) ? htmlspecialchars($old_inputs['testimony']) : '';
    unset($_SESSION['old_inputs']);
}

if(isset($_POST['submit_memory'])){
    // reCAPTCHA validation
    $recaptcha_secret = '6LfxbVssAAAAAIebPV_2dRwUniaSO_fJtlqsmKmR';
    $recaptcha_response = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : '';
    
    // Preserve submitted values
    $old_name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $old_email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $old_phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
    $old_testimony = isset($_POST['testimony']) ? htmlspecialchars($_POST['testimony']) : '';
    
    if(empty($recaptcha_response)){
        $_SESSION['error_msg'] = "Please complete the reCAPTCHA verification.";
        $_SESSION['recaptcha_error'] = "Please complete the reCAPTCHA verification.";
        $_SESSION['old_inputs'] = $_POST;
        header("Location: share-your-memories-or-healing-testimonies-of-fr-rookey.php");
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
            header("Location: share-your-memories-or-healing-testimonies-of-fr-rookey.php");
            exit;
        } else {
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $phone = mysqli_real_escape_string($conn, $_POST['phone']);
            $testimony = mysqli_real_escape_string($conn, $_POST['testimony']);
            $file_path = "";

            // File Upload Logic
            if(isset($_FILES['attachment']) && $_FILES['attachment']['error'] == 0){
                $target_dir = "uploads/";
                if(!is_dir($target_dir)){
                    mkdir($target_dir, 0777, true);
                }
                $file_name = time() . '_' . basename($_FILES["attachment"]["name"]);
                $target_file = $target_dir . $file_name;
                
                // Allow certain file formats
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                $allowed_types = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                
                if(in_array($imageFileType, $allowed_types)){
                     if (move_uploaded_file($_FILES["attachment"]["tmp_name"], $target_file)) {
                        $file_path = $target_file;
                    } else {
                        $_SESSION['error_msg'] = "Sorry, there was an error uploading your file.";
                        $_SESSION['old_inputs'] = $_POST;
                        header("Location: share-your-memories-or-healing-testimonies-of-fr-rookey.php");
                        exit;
                    }
                } else {
                    $_SESSION['error_msg'] = "Sorry, only JPG, JPEG, PNG, GIF, PDF, DOC & DOCX files are allowed.";
                    $_SESSION['old_inputs'] = $_POST;
                    header("Location: share-your-memories-or-healing-testimonies-of-fr-rookey.php");
                    exit;
                }
            }

            // Note: If logic continues here, errorMsg is assumed empty, but file upload logic above exits on error.
            if(empty($name) || empty($email) || empty($testimony)){
                $_SESSION['error_msg'] = "Please fill in all required fields.";
                $_SESSION['old_inputs'] = $_POST;
                header("Location: share-your-memories-or-healing-testimonies-of-fr-rookey.php");
                exit;
            } else {
                $sql = "INSERT INTO memories (name, email, phone, testimony, file_path) VALUES ('$name', '$email', '$phone', '$testimony', '$file_path')";
                if(mysqli_query($conn, $sql)){
                    $_SESSION['success_msg'] = "Thank you for sharing your memory/testimony!";
                    header("Location: share-your-memories-or-healing-testimonies-of-fr-rookey.php");
                    exit;
                } else {
                    $_SESSION['error_msg'] = "Error: " . mysqli_error($conn);
                    $_SESSION['old_inputs'] = $_POST;
                    header("Location: share-your-memories-or-healing-testimonies-of-fr-rookey.php");
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
    <title>Share Your Memories or Healing Testimonies &#8211; Fr Peter Mary Rookey</title>
    <meta name="description" content="Share your wonderful memories of Fr. Rookey or testimonies of healings for public display." />
    <?php include 'includes/head-links.php'; ?>
    <style>
        .share-section {
            padding: 40px 0;
            background: #fff;
        }
        .share-form-wrapper {
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
        .char-count {
            font-size: 12px;
            color: #666;
            margin-top: -15px;
            margin-bottom: 20px;
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
        }
        .instruction-text h3 {
            font-size: 22px;
            color: #333;
            margin-bottom: 15px;
            font-weight: 700;
        }
        .address-box {
            margin: 20px 0;
            font-weight: 400;
            color: #555;
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

    <main class="share-section">
        <div class="container">
            <h1 class="blog-title">Share Your Memories or Healing Testimonies of Fr. Rookey</h1>
            
            <div class="share-form-wrapper">
                <?php if($msg): ?>
                    <div class="alert alert-success"><?php echo $msg; ?></div>
                <?php endif; ?>
                <?php if($errorMsg): ?>
                    <div class="alert alert-danger"><?php echo $errorMsg; ?></div>
                <?php endif; ?>

                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="form-label">Name <span>*</span></label>
                        <input type="text" name="name" class="form-control" placeholder="" value="<?php echo $old_name; ?>" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Email (Not for Public Display) <span>*</span></label>
                            <input type="email" name="email" class="form-control" placeholder="" value="<?php echo $old_email; ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Phone Number (Not for Public Display) <span>*</span></label>
                            <input type="tel" name="phone" class="form-control" placeholder="" maxlength="25" value="<?php echo $old_phone; ?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Write Your Testimonies (For Public Display) <span>*</span></label>
                        <textarea name="testimony" class="form-control" maxlength="1000" required><?php echo $old_testimony; ?></textarea>
                        <div class="char-count">0 of 1000 max characters.</div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Photo or Other Attachments </label>
                        <input type="file" name="attachment" class="form-control" style="padding: 6px;">
                    </div>

                    <div class="form-group" style="margin-bottom: 20px;">
                        <div class="g-recaptcha" data-sitekey="6LfxbVssAAAAABV456Z8wZy7veDL6DY4XY1LS8MT"></div>
                        <?php if($recaptchaError): ?>
                            <div class="feedback-error" style="color:#dc3545; font-size:0.85rem; margin-top:5px;">
                                <?php echo $recaptchaError; ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <button type="submit" name="submit_memory" class="btn-submit">Submit</button>
                </form>
            </div>

            <div class="instruction-text">
                <h3>Please share your wonderful memories of Fr. Rookey or testimonies of healings for public display. Or, send them in writing, including your hand-written signature to:</h3>
                
                <div class="address-box">
                    Timothy Rookey<br>
                    2040 Allen Blvd #6<br>
                    Middleton, WI 53562
                </div>

                <p style="margin-bottom: 15px;">Please tell us of your experiences with Fr. Rookey, your friendship with him, what makes you think he should be proclaimed a saint by the Catholic Church, what healings, miracles, or mystical phenomena you yourself or someone you knew experienced, or what virtues you saw displayed by Fr. Rookey.</p>
                
                <p>This will greatly help to advance Father's cause for canonization. Thanks very much for your cooperation in this effort!</p>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/script-links.php'; ?>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        setTimeout(function() {
            var alerts = document.querySelectorAll('.alert-success, .alert-danger');
            alerts.forEach(function(alert) {
                alert.style.display = 'none';
            });
        }, 6000);
    </script>
</body>
</html>
