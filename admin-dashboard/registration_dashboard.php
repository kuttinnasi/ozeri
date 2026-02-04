<?php 
	session_start();

    require('config.php');
    include_once('common.php');

	if(!isset($_SESSION['user_id']))
	{
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
        <title><?php echo APPNAME; ?> - View All Registrations</title>
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
                    <?php //include_once('side_menu.php');?>
                    <!--/.span3-->
                    <div class="span12">
                    <div class="content">

                        <div class="module">
                            <div class="module-body">

                        <div class="module">
                            <div class="module-head">
                                <h3>List Registrations</h3>
                            </div>
                            <div class="module-body table">
                                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                                    <thead>
                                         <tr>
                                                <th>Would like to register yourself?</th>
                                                <th>Name </th>
                                                <th>Contact Number</th>                                            
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Action</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                       <?php                                            
                                            $sql = "SELECT * FROM `registrations` ORDER BY `id` DESC";
                                            //echo $sql; exit;
                                            $query = $conn->query($sql);
                                            while($row = $query->fetch_assoc()){
                                                
                                                // $date = date('d-M-Y h:i:s', strtotime($row['presentation_date']));
                                                    // <td>".$date."</td>
                                                echo 
                                                "<tr>
                                                    <td>".$row['do_you_have_spiritual_guru']."</td>
                                                    <td>".$row['name']."</td>
                                                    <td>".$row['contact_number']."</td>                                                      
                                                    <td>".$row['email']."</td>
                                                    <td>".$row['address']."</td>
                                                    <td>
                                                    <a href='registration_view.php?id=".$row['id']."' class='btn btn-primary btn-sm' alt='edit'>View</a>         
                                                    </td>

                                                </tr>";
                                            }
                                            ?>                                  
                                    </tbody>
                                </table>
                            </div>
                        </div><!--/.module-->
                    </div><!--/.content-->
                </div>
            </div>
        </div>
    </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <?php include_once('footer.php');?>
            </div>
        </div>
    </div>
        </div>
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