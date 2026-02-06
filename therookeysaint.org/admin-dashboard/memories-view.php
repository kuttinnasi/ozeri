<?php 
	session_start();

	include_once('config.php');
	include_once('common.php');
	
	if(!isset($_SESSION['user_id'])) {
		header('location:index.php');
		exit;
	}

    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    if($id == 0) {
        header('location:memories-list.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo defined('APPNAME') ? APPNAME : 'Dashboard'; ?> - View Memory Details</title>
    <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="css/theme.css" rel="stylesheet">
    <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/fav.png" />
</head>
<body>
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
           <?php include_once('top-header.php');?>
        </div>
    </div>
    
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="content">
                        <div class="module">
                        <div class="module-head">
                            <h3>View Memory/Testimony Details</h3>
                            <span style="float: right;"> 
                                <a href='memories-list.php' class='btn btn-info'>Back</a>						
                            </span>
                        </div>
                        <div class="module-body">
                        <?php
                            $sql = "SELECT * FROM `testimonials` where id = $id";
                            $query = $conn->query($sql);
                            if($query && $row = $query->fetch_assoc()){					
                        ?>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th style="width:200px;">ID</th>
                                        <td><?php echo $row['id'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Name</th>
                                        <td><?php echo htmlspecialchars($row['name']) ?></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td><?php echo htmlspecialchars($row['email']) ?></td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <td><?php echo htmlspecialchars($row['phone']) ?></td>
                                    </tr>
                                    <tr>
                                        <th>Testimony</th>
                                        <td style="white-space: pre-wrap;"><?php echo htmlspecialchars($row['testimony']) ?></td>
                                    </tr>
                                    <tr>
                                        <th>Attachment</th>
                                        <td>
                                            <?php 
                                            if(!empty($row['file_path'])) {
                                                // Adjust path if needed. Assuming stored as 'uploads/filename' relative to root.
                                                // Admin is in admin-dashboard/, uploads are in ../uploads/
                                                $displayPath = "../" . $row['file_path'];
                                                echo "<a href='$displayPath' target='_blank'>View Attachment</a>";
                                            } else {
                                                echo "No attachment";
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        <?php } else { echo "Record not found."; } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <div class="container">
        <?php include_once('footer.php');?>
    </div>
</div>
<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
