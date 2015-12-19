<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/index.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <body>
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
        <h1>
            Sign Up
        </h1>
        <h3>Create an account or sign up using Facebook to use the website</h3>

        <br />
        <br />
        <div class="row">
           <div class="col-md-6">
                <form method="post" action="<?php echo base_url();?>index.php/signup_controller/RegisterUser">
                <label style="float:left;">Email Address</label>
                <input type="text" class="form-inline form-control" name="Email">
                <div></div>
            
                <label style="float:left;">First Name:</label>
                <input type="text" class="form-inline form-control" name='FirstName'>
                <div></div>
                
                <label style="float:left;">Last Name:</label>
                <input type="text" class="form-inline form-control" name="LastName">
                <div></div>
                

                <label style="float:left;">Phone Number</label>
                <input type="text" class="form-inline form-control" name="Phone">
                <div></div>
                
                <label style="float:left;">Password</label>
                <input type="password" class="form-inline form-control" name="Pass1">
                <div></div>
                
                <label style="float:left;">Enter your Password again</label>
                <input type="password" class="form-inline form-control" name="Pass2">
                <div></div>
 
                <label style="float:left;">Press Submit to proceed</label>
                <div></div>
                
                <input type="submit" class="btn-group-justified btn btn-success">

                </form>
                <br />
           </div>
            
            <div class="col-md-6">
               <br />

               <a href="#"><img src="<?php echo base_url('/assets/Facebook_logo_(square).png'); ?>" class="img-responsive" alt="Sign Up with FB" /> </a>
           </div>
           
</div>
        
            <!-- BOTTOM NAVBAR STARTED -->
    <nav class="nav navbar-fixed-bottom">
        <div class="container-fluid" style="text-align:center; color:white; background-color:black;">
            12L-4021 Zohaib Ahmed Butt
        </div>
    </nav>
    </body>
</html>
