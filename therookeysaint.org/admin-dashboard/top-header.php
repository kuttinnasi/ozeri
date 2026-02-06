<?php     $user_id = $_SESSION['user_id']; ?>
<div class="container">
    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
        <i class="icon-reorder shaded"></i></a><a class="brand"><?php echo APPNAME; ?> &nbsp; </a>
    <div class="nav-collapse collapse navbar-inverse-collapse">
        <div class="topnav">
          <?php $cur = basename($_SERVER['PHP_SELF']); ?>
          <a class="<?php echo ($cur == 'petition-page-list.php' || $cur == 'petition-page-view-details.php') ? 'active' : ''; ?>" href="petition-page-list.php">List of Petitions</a>
          <a class="<?php echo ($cur == 'prayer-request-list.php' || $cur == 'prayer-request-view.php') ? 'active' : ''; ?>" href="prayer-request-list.php">List of Prayer Request</a>
          <a class="<?php echo ($cur == 'memories-list.php' || $cur == 'memories-view.php') ? 'active' : ''; ?>" href="memories-list.php">List of Testimonies</a>
        </div>

    <?php if(!isset($_GET['f'])) { ?>

        <ul class="nav pull-right">

        <?php if ($user_id == 1) {  ?>
           
        <?php }  ?>

            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">            
                <span style="font-size:14px;">Welcome, </span> <span style="color:red; font-size:14px;">
                <?php 

                $user_id = $_SESSION['user_id'];

                if ($user_id == 1) {
                    echo 'Admin';
                } else {
                    echo 'Partner';
                }

                ?> !</span>
                <img src="images/user.png" class="nav-avatar"  alt="<?php echo $_SESSION['partner_id']; ?>" title="<?php echo $_SESSION['partner_id']; ?>"/>
                <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="logout.php?logout=true">Logout</a></li>
                </ul>
            </li>
        </ul>

    <?php } ?>

    </div>
    <!-- /.nav-collapse -->
</div>