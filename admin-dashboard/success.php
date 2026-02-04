<?php include_once('header.php');?>
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="container">
            <div class="row">
                <!-- TITLE-->
				
				<?php $frm = isset($_GET['frm']) ? $_GET['frm'] : ''; ?>
				
				<?php if ($frm == 's') { ?>
				
                <div class="page-title">
               	    <h3>Membership Form</h3>
               	</div>
               	<!-- CONTENT-->
				   <h3>Thank you for submitting the details, We will contact you!</h3> 
				   <p>&nbsp;</p>
				   <p>&nbsp;</p>
				   <p>&nbsp;</p>
				   <p>&nbsp;</p>
				   
				<?php } elseif ($frm == 't')  { ?>
				   
				   <div class="page-title">
               	    <h3>Teacher Registeration</h3>
               	</div>
               	<!-- CONTENT-->
				   <h3>Thank you for submitting the details, We will contact you!</h3> 
				   <p>&nbsp;</p>
				   <p>&nbsp;</p>
				   <p>&nbsp;</p>
				   <p>&nbsp;</p>
				   
				   <?php } elseif ($frm == 'cp')  { ?>
				   
				    <div class="page-title">
               	    <h3>Channel Partner Register</h3>
               	</div>
               	<!-- CONTENT-->
				   <h3>Thank you for submitting the details, We will contact you!</h3> 
				   <p>&nbsp;</p>
				   <p>&nbsp;</p>
				   <p>&nbsp;</p>
				   <p>&nbsp;</p>
				  
				 <?php } elseif ($frm == 'ro')  { ?>
				   
				   <div class="page-title">
               	    <h3>Register Success</h3>
               	</div>
               	<!-- CONTENT-->
				   <h3>Thank you for submitting the details, We will contact you!</h3> 
				   <p>&nbsp;</p>
				   <p>&nbsp;</p>
				   <p>&nbsp;</p>
				   <p>&nbsp;</p>
				   
				 <?php } ?>

				 
            </div>
        </div>
    </div>
               	
<?php include_once('footer.php');?>
</body>
</html>