<!DOCTYPE html>
<html>
    <head>
        
        <title>User Dashboard</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/index.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url("assets/js/Ad.js");?>" ></script>
    </head>
    <body onload="DisplayAds()">
        <?php echo "Welcome". $username; ?>
        <nav class="navbar navbar-fixed-top navbar_color" style="color:white;">
        <div class="container-fluid">
            <div class="navbar-brand navbar_color">
                <a href="<?php echo base_url('/index.php'); ?>" style="color:white; text-decoration:none;">MyOLX</a>
            </div>

            <div class="collapse navbar-collapse" style="color:white; float:right;">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php echo base_url('/index.php/uhome_controller'); ?>" style="color:white;">Home</a>
                    </li>

                    <li class="active">
                        <a href="<?php echo base_url('/index.php/signup_controller'); ?>" style="color:white;">Sign Up!</a>
                    </li>

                    <li class="active">
                        <a href="<?php echo base_url('/index.php/login_controller'); ?>" style="color:white;">Log In</a>
                    </li>

                    <li class="active">
                        <a href="<?php echo base_url('/index.php/search_controller'); ?>" style="color:white;">Search Ads</a>
                    </li>
                     <li class="active">
                        <a href="<?php echo base_url('/index.php/ajax_controller'); ?>" style="color:white;">Ajax Search</a>
                    </li>
                    
                    <li class="active">
                        <a href="<?php echo base_url('/index.php/facebook_controller'); ?>" style="color:white;">Facebook Friends</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
<!--TOP NAVBAR ENDED -->

<div class="jumbotron mainbody_margin" style="margin-bottom:0px;">
    <h1> Welcome <?php echo ucfirst($username); ?> </h1>
    <h2>Operation Dashboard</h2>
    <h3>Click on one of the following to proceed</h3>
    <div class="row">
        <br />
       <br />
       <div class="col-md-6">
           <li>
                <a href="<?php echo base_url("index.php/post_controller"); ?>">Post Ads</a>
           </li>
        </div>
       
       <div class="col-md-6">
            <li>
                <a href="<?php echo base_url("index.php/search_controller"); ?>">Search Ads</a>
            </li>
        </ul>
       </div>
    </div>
    <br></br>
    <div class="row">
        <div class="col-md-6">
            <li>
                <a href="<?php echo base_url("index.php/logout_controller");?>">Logout</a> 
            </li>
        </div>
    </div>
    
      <div id="AdImage" >
            <br />
            <button id="Close Ad" onclick="CloseADS()">Close Ads</button>
        </div>

    <?php echo br(12); ?>
    
</div>

<nav class="nav navbar-fixed-bottom">
        <div class="container-fluid" style="text-align:center; color:white; background-color:black;">
            12L-4021 Zohaib Ahmed Butt
        </div>
    </nav>
    </body>
</html>

