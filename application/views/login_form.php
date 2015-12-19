<!DOCTYPE html>
<html>
    <head>
        <title>Log In</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/index.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </head>
    
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
    <div class="row">
        <br />
       <br />
        <div class="col-md-6">
            <h1 style="text-align: left;">Login</h1>
             <br />
             <br />
            <form method="post" action="<?php echo base_url();?>index.php/login_controller/LoginUser">
                <div class="col-md-3" style="text-align:left;">
                    <label>Email Address</label>
                </div>
                <div class="col-md-9">
                    <input type="text" class="form-group-sm form-control" name="Email">
                </div>
                <div></div>
                
                <br /> <br /> <br />

                <div class="col-md-3" style="text-align:left;">
                    <label>Password</label>
                </div>
                
                <div class="col-md-9">
                    <input type="password" class="form-group-sm form-control" name="Pass">
                </div>
                <div></div>

                <br />
               <br />
               <br />
               

               <div class="col-md-12">
                    <input type="submit" class="btn btn-danger btn-group-lg">
               </div>
            </div>

           <div class="col-md-6">
               <br />
               <br />
               <button class="fb_button btn btn-success btn-group-lg" style="background-color:#394f87" >
               <br /><br /><br /><br /> Log In Using Facebook  <br /><br /><br /><br /><br /> </button>
           </div>
            </form>
        </div>
    
        <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                  <a href="#" >
                      <img src="<?php echo base_url('/assets/facebook.png'); ?>" class="img-responsive" />
                  </a>
              </div>
              <div class="col-md-3"></div>
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