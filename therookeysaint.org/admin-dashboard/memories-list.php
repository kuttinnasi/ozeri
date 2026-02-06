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
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo defined('APPNAME') ? APPNAME : 'Dashboard'; ?> - View Testimonies</title>
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
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="content">
                            <div class="module">
                            	<div class="module-head">
                                  <div class="flex-div title">
                                    <h3>List of Testimonies</h3>
                                  </div>
                                  <div class="flex-div button">
                                      <form method="post" action="export_testimonies.php">
                                          <input type="submit" name="export" class="btn btn-primary export-btn" value="Export All">
                                      </form>
                                  </div>                                  	
                                </div>
                                <div class="module-body table">
                                    <table id="example" class="display table table-bordered table-striped" width="100%" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
 
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>  
                                                <th>Testimony (Excerpt)</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php	$i=1;											
												$sql = "SELECT * FROM `testimonials` ORDER BY `id` DESC";
                                                $query = $conn->query($sql);
                                                if($query) {
                                                    while($row = $query->fetch_assoc()) {
                                                        $excerpt = substr(strip_tags($row['testimony']), 0, 50) . '...';
                                                        echo 
                                                        "<tr>
                                                            <td>".$i."</td>

                                                            <td>".htmlspecialchars($row['name'])."</td>    
                                                            <td>".htmlspecialchars($row['email'])."</td>				
                                                            <td>".htmlspecialchars($row['phone'])."</td>
                                                            <td>".$excerpt."</td>
                                                            <td> 
                                                            <a href='memories-view.php?id=".$row['id']."' class='btn btn-success btn-sm'  title='View'><i class='fa fa-eye' aria-hidden='true'></i></a> 
                                                            <a href='memories-delete.php?id=".$row['id']."' class='btn btn-danger btn-sm'  title='Delete'><i class='fa fa-trash' aria-hidden='true'></i></a> 
                                                            </td>
                                                        </tr>";
                                                        $i++;
                                                    }
                                                }
											?>
										</tbody>
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
        <script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
		<script>
			$(document).ready(function() {
				$('#example').DataTable({
					"aLengthMenu": [[50, 200, 500, -1], [50, 200, 500, "All"]],
				});
			} );
		</script>
	</body>
</html>
