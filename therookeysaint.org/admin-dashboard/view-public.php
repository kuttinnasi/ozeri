<?php 
	session_start();
	
	require('config.php');
	include_once('common.php');

	/* if(!isset($_SESSION['user_id'])) {
		header('location:index.php');
		exit;
	} */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo APPNAME; ?> - View Register Details</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
		<link rel="shortcut icon" href="images/fav.png" />
    </head>
	
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
		
               <?php include_once('top-header.php');?>

            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">

                    <?php include_once('side_menu.php');?>

                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="module">
							<div class="module-head">
								<h3>View Register Details</h3>
								<span style="float: right;"> 
								

								<a href='<?php echo APPROVEURL; ?>?id=<?php echo $_GET['id']; ?>' class='btn btn-success' title="Approve">Approve</a> 
								
								</span>
							</div>
						<div class="module-body">

						<?php	

							$sql = "SELECT * FROM `register_form` WHERE id = ".$_GET['id']."";

							$query = $conn->query($sql);

							while($row = $query->fetch_assoc()){						
							?>
								<table class="table table-bordered">
								  <thead>
									<tr>
									  <th>ID</th>
									 <td><?php echo $row['id'] ?></td>
									</tr>
									<tr>
									  <th>Programme</th>
									 <td><?php echo $row['programme'] ?></td>
									</tr>
									<tr>
									  <th>Choose Donor Type</th>
									 <td><?php echo $row['donor_type'] ?></td>
									</tr>
									<tr>
									  <th>Personal Details</th>
									 <td><?php echo $row['personal_details'] ?></td>
									</tr>
									<tr>
									 <th>Name</th>
									 <td><?php echo $row['name'] ?></td>
									</tr>
									<tr>
									<th>Email ID</th>
									 <td><?php echo $row['email'] ?></td>
									</tr>
									<tr>
									<th>Address</th>
									 <td><?php echo $row['address'] ?></td>
									</tr>
									<tr>
									 <th>Mobile Number</th>
									 <td><?php echo $row['mobile_number'] ?></td>
									</tr>
									<tr>
									 <th>City</th>
									 <td><?php echo $row['city'] ?></td>
									</tr>
									<tr>
									 <th>Pin Code</th>
									 <td><?php echo $row['pin_code'] ?></td>
									</tr>
									<tr>
									 <th>Pan Card No</th>
									 <td><?php echo $row['pan_card_no'] ?></td>
									</tr>
									<tr>
									 <th>Choose payment Type</th>
									 <td><?php echo $row['payment_type'] ?></td>
									</tr>
									<tr>
									 <th>Amount</th>
									 <td><?php echo $row['amount'] ?></td>
									</tr>
									<tr>
									 <th>Above Rs.1500, as much as you would like</th>
									 <td><?php echo $row['more_payment'] ?></td>
									</tr>
									
									<!-- <tr>
									 <th>Date Submitted</th>
									 <td><?php echo date('d-M-Y', strtotime($row['date_submitted'])) ?></td>
									</tr> -->
							<?php } ?>
								  </thead>
								</table>

							
								</table>
							</div>
						</div>
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <?php include_once('footer.php');?>
            </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
<script>
$(document).ready(function() {
$('#DataTable').DataTable({
	
	"aaSorting": [[ 0, "desc" ]],
	 //"order": [[ 0, "desc" ]]
	});
} );
</script>
<script>
$(document).ready(function(){
//hide alert
$(document).on('click', '.close', function(){
$('.alert').hide();
})
});
</script>