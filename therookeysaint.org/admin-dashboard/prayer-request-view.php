<?php 
	session_start();
	
	require('config.php');
	include_once('common.php');

	if(!isset($_SESSION['user_id'])) {
		header('location:index.php');
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo APPNAME; ?> - View Prayer Request</title>
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

                    <?php // include_once('side_menu.php');?>
					
                    <!--/.span3-->
                    <div class="span12">
                        <div class="content">
                            <div class="module">
                              <div class="module-head">
                                  <div class="flex-div title">
                                    <h3>View Prayer Requests</h3>
                                  </div>
                                  <div class="flex-div button">
                                     <span> 
								         <a href='javascript:history.back(-1);' class='btn btn-info'>Back</a>								
								     </span>
                                  </div>                                  	
                              </div>
						<div class="module-body">

						<?php	

							$sql = "SELECT * FROM `prayer_request` WHERE id = ".$_GET['id']."";

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
									  <th>Name</th>
									 <td><?php echo $row['name'] ?></td>
									</tr>
									<th>Email (Not For Public Display)</th>
									 <td><?php echo $row['email'] ?></td>
									</tr>
									<tr>
									  <th>Phone Number (Not For Public Display)</th>
									 <td><?php echo $row['phone_number'] ?></td>
									</tr>
									<tr>
									 <th>Prayer Request Message</th>
									 <td><?php echo $row['message'] ?></td>
									</tr>
									<tr>
									
									<tr>
									 <th>Submitted Date</th>
									 <td><?php echo date('d-M-Y', strtotime($row['created_at'])) ?></td>
									</tr>
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
        </div> </div>
            </body>
                </head>
                    </html>
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