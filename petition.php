<?php 
session_start();
include 'config.php';

$msg = "";
$errorMsg = "";
$recaptchaError = "";

// Preserve old values
$old_name = "";
$old_country = "USA";
$old_state = "";
$old_email = "";

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
    $old_country = isset($old_inputs['country']) ? htmlspecialchars($old_inputs['country']) : 'USA';
    $old_state = isset($old_inputs['state']) ? htmlspecialchars($old_inputs['state']) : '';
    $old_email = isset($old_inputs['email']) ? htmlspecialchars($old_inputs['email']) : '';
    unset($_SESSION['old_inputs']);
}

// Handle Form Submission
if(isset($_POST['submit_petition'])){
    // reCAPTCHA validation
    $recaptcha_secret = '6LfxbVssAAAAAIebPV_2dRwUniaSO_fJtlqsmKmR';
    $recaptcha_response = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : '';
    
    // Preserve submitted values
    $old_name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $old_country = isset($_POST['country']) ? htmlspecialchars($_POST['country']) : 'USA';
    $old_state = isset($_POST['state']) ? htmlspecialchars($_POST['state']) : '';
    $old_email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    
    if(empty($recaptcha_response)){
        $_SESSION['error_msg'] = "Please complete the reCAPTCHA verification.";
        $_SESSION['recaptcha_error'] = "Please complete the reCAPTCHA verification.";
        $_SESSION['old_inputs'] = $_POST;
        header("Location: petition.php");
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
            header("Location: petition.php");
            exit;
        } else {
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $country = mysqli_real_escape_string($conn, $_POST['country']);
            $state = isset($_POST['state']) ? mysqli_real_escape_string($conn, $_POST['state']) : '';
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $other_state = ''; // Defaulting as logic for other_state wasn't fully clear in previous snippets, but keeping it empty for now or treating 'state' as generic.

            // Basic Validation
            if(empty($name) || empty($country) || empty($email)){
                $_SESSION['error_msg'] = "Please fill in all required fields.";
                $_SESSION['old_inputs'] = $_POST;
                header("Location: petition.php");
                exit;
            } else {
                // Check for duplicates (optional, based on name as per previous logic)
                $check_sql = "SELECT id FROM petition WHERE name = '$name'";
                $check_res = mysqli_query($conn, $check_sql);
                
                if(mysqli_num_rows($check_res) > 0){
                     $_SESSION['error_msg'] = "You have already signed the petition.";
                     $_SESSION['old_inputs'] = $_POST;
                     header("Location: petition.php");
                     exit;
                } else {
                    $insert_sql = "INSERT INTO petition (name, country, state, other_state, email) VALUES ('$name', '$country', '$state', '$other_state', '$email')";
                    if(mysqli_query($conn, $insert_sql)){
                        $_SESSION['success_msg'] = "Thank you for signing the petition!";
                         // Redirect to avoid resubmission on refresh
                         header("Location: petition.php");
                         exit;
                    } else {
                        $_SESSION['error_msg'] = "Error submitting petition: " . mysqli_error($conn);
                        $_SESSION['old_inputs'] = $_POST;
                        header("Location: petition.php");
                        exit;
                    }
                }
            }
        }
    }
}



// Pagination and Search Logic
$limit = 10;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if($page < 1) $page = 1;
$offset = ($page - 1) * $limit;

$search = isset($_GET['search']) ? mysqli_real_escape_string($conn, $_GET['search']) : '';
$where_clause = "";
if(!empty($search)){
    $where_clause = "WHERE name LIKE '%$search%' OR country LIKE '%$search%' OR state LIKE '%$search%'";
}

// Get Total Count
$count_sql = "SELECT COUNT(*) as total FROM petition $where_clause";
$count_res = mysqli_query($conn, $count_sql);
$count_row = mysqli_fetch_assoc($count_res);
$total_records = $count_row['total'];
$total_pages = ceil($total_records / $limit);

// Get Data
$data_sql = "SELECT * FROM petition $where_clause ORDER BY id DESC LIMIT $offset, $limit";
$res_data = mysqli_query($conn, $data_sql);

?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <title>Petition of Support for Fr Rookey's Canonization &#8211; Fr Peter Mary Rookey</title>
    <meta name="description" content="Sign the petition of support for the cause of canonization of Fr. Peter Mary Rookey." />
    <?php include 'includes/head-links.php'; ?>
    <style>
        .petition-section {
            padding: 0px 0;
            background: #fff;
        }
        .page-title {
            font-size: 28px;
            color: #1a4b7e;
            margin-bottom: 30px;
            font-weight: 600;
        }
        
        /* Form Styling */
        .petition-form-wrapper {
            background-color: #eee;
            padding: 50px 25px;
            box-shadow: 0px 1px 20px rgba(0, 0, 0, .2);
            margin-bottom: 50px;
        }
        .alert {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
        }
        .alert-success {
            background-color: #dff0d8;
            color: #3c763d;
            border: 1px solid #d6e9c6;
        }
        .alert-danger {
            background-color: #f2dede;
            color: #a94442;
            border: 1px solid #ebccd1;
        }
        .form-row {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
            align-items: flex-end;
        }
        .form-group {
            flex: 1;
            display: flex;
            flex-direction: row;
            align-items: center;
        }
        .form-group label {
            width: 220px;
            font-size: 14px;
            font-weight: 700;
            color: #333;
            line-height: 1.3;
        }
        .form-group label span {
            color: red;
        }
        .form-control {
            flex: 1;
            padding: 10px 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            color: #424646;
            background: #fff;
        }
        .btn-submit {
            background: #1a4b7e;
            color: #fff;
            border: none;
            padding: 10px 30px;
            border-radius: 4px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
            display: block;
            margin: 20px auto 0;
        }
        .btn-submit:hover {
            background: #153856;
        }

        /* Table Styling */
        .petition-table-controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            font-size: 14px;
            color: #555;
        }
        .search-box input {
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-left: 10px;
        }
        .petition-table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            border: 1px solid #000;
            margin-bottom: 20px;
        }
        .petition-table thead tr {
            background-color: #1a4b7e;
            color: #ffffff;
            text-align: left;
        }
        .petition-table th {
            padding: 12px 15px;
            font-weight: 600;
            font-size: 14px;
            border-right: 1px solid rgba(255,255,255,0.2);
        }
        .petition-table td {
            padding: 12px 15px;
            border-bottom: 1px solid #000;
            font-size: 14px;
            color: #444;
        }
        .petition-table tr:nth-of-type(even) {
            background-color: #f9f9f9;
        }
        
        .pagination-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
            color: #666;
        }
        .pagination-links {
            display: flex;
            gap: 5px;
        }
        .pagination-links a, .pagination-links span {
            padding: 5px 10px;
            border: 1px solid #ddd;
            color: #1a4b7e;
            text-decoration: none;
            border-radius: 3px;
        }
        .pagination-links .active {
            background: #f5f5f5;
            color: #333;
            border-color: #ddd;
        }
        .pagination-links .dots {
            border: none;
            color: #999;
        }
        .pagination-links a:hover {
            background-color: #eee;
        }

        @media (max-width: 991px) {
            .form-row {
                flex-direction: column;
                align-items: stretch;
            }
            .form-group {
                flex-direction: column;
                align-items: flex-start;
            }
            .form-group label {
                width: 100%;
                margin-bottom: 5px;
            }
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main class="petition-section">
        <div class="container">
            <h1 class="blog-title">Petition of Support for Fr Rookey's Canonization</h1>
            
            <div class="petition-form-wrapper">
                <?php if($msg): ?>
                    <div class="alert alert-success"><?php echo $msg; ?></div>
                <?php endif; ?>
                <?php if($errorMsg): ?>
                    <div class="alert alert-danger"><?php echo $errorMsg; ?></div>
                <?php endif; ?>

                <form action="petition.php" method="POST">
                    <div class="form-row">
                        <div class="form-group">
                            <label>Full Name Or Initials Only <span>*</span></label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Your Full Name Or Initials" value="<?php echo $old_name; ?>" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label>Country <span>*</span></label>
                            <select name="country" class="form-control" required>
                                <option value="USA" <?php echo ($old_country == 'USA') ? 'selected' : ''; ?>>USA</option>
                                <option value="Ireland" <?php echo ($old_country == 'Ireland') ? 'selected' : ''; ?>>Ireland</option>
                                <option value="UK" <?php echo ($old_country == 'UK') ? 'selected' : ''; ?>>UK</option>
                                <option value="Canada" <?php echo ($old_country == 'Canada') ? 'selected' : ''; ?>>Canada</option>
                                <option value="Australia" <?php echo ($old_country == 'Australia') ? 'selected' : ''; ?>>Australia</option>
                                <option value="Other" <?php echo ($old_country == 'Other') ? 'selected' : ''; ?>>Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label style="width: 150px; margin-left:20px;">State of Residence (If USA)</label>
                            <input type="text" name="state" class="form-control" placeholder="State of Residence" value="<?php echo $old_state; ?>">
                        </div>
                    </div>

                    <div class="form-row" style="margin-top: 20px;">
                        <div class="form-group">
                            <label>Email (If you wish to receive updates, Not for Public Display) <span>*</span></label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Your Email" value="<?php echo $old_email; ?>" required>
                        </div>
                    </div>

                    <div class="form-group" style="margin-bottom: 20px; display: flex; justify-content: center; flex-direction: column; align-items: center;">
                        <div class="g-recaptcha" data-sitekey="6LfxbVssAAAAABV456Z8wZy7veDL6DY4XY1LS8MT" data-callback="recaptchaCallback"></div>
                        <?php if($recaptchaError): ?>
                            <div class="feedback-error" style="color:#dc3545; font-size:0.85rem; margin-top:5px;">
                                <?php echo $recaptchaError; ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <button type="submit" name="submit_petition" class="btn-submit">Submit</button>
                </form>
            </div>
            <div class="petition-table-controls">
                <div>
                     Show 
                     <select onchange="window.location.href='?limit='+this.value">
                         <option value="10" <?php echo $limit == 10 ? 'selected' : ''; ?>>10</option>
                     </select>
                     entries
                </div>
                <div class="search-box">
                    <form action="" method="GET">
                        <label>Search: <input type="text" name="search" value="<?php echo htmlspecialchars($search); ?>"></label>
                        <!-- Preserve other GET params if needed, but for now simple search is fine -->
                    </form>
                </div>
            </div>

            <table class="petition-table">
                <thead>
                    <tr>
                        <th width="50">No.</th>
                        <th>Full Name or Initials Only</th>
                        <th>Country</th>
                        <th>State of Residence (If USA)</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(mysqli_num_rows($res_data) > 0): ?>
                        <?php 
                        $i = $offset + 1;
                        while($row = mysqli_fetch_assoc($res_data)): 
                        ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo htmlspecialchars($row['name']); ?></td>
                            <td><?php echo htmlspecialchars($row['country']); ?></td>
                            <td><?php echo htmlspecialchars($row['state']); ?></td>
                            <td><?php echo date('M d, Y', strtotime($row['created_at'])); ?></td>
                        </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" style="text-align:center;">No signatures found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>

            <div class="pagination-info">
                <div>
                    Showing <?php echo $total_records > 0 ? $offset + 1 : 0; ?> to <?php echo min($offset + $limit, $total_records); ?> of <?php echo $total_records; ?> entries
                </div>
                <div class="pagination-links">
                    <?php if($page > 1): ?>
                        <a href="?page=<?php echo $page-1; ?>&search=<?php echo urlencode($search); ?>">Previous</a>
                    <?php else: ?>
                        <span class="disabled">Previous</span>
                    <?php endif; ?>

                    <?php for($p=1; $p<=$total_pages; $p++): ?>
                        <?php if($p == $page): ?>
                            <a href="#" class="active"><?php echo $p; ?></a>
                        <?php elseif($p <= 5 || $p > $total_pages - 1 || abs($page - $p) < 2): ?>
                             <a href="?page=<?php echo $p; ?>&search=<?php echo urlencode($search); ?>"><?php echo $p; ?></a>
                        <?php elseif(abs($page - $p) == 2): ?>
                             <span class="dots">...</span>
                        <?php endif; ?>
                    <?php endfor; ?>

                    <?php if($page < $total_pages): ?>
                         <a href="?page=<?php echo $page+1; ?>&search=<?php echo urlencode($search); ?>">Next</a>
                    <?php else: ?>
                        <span class="disabled">Next</span>
                    <?php endif; ?>
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
