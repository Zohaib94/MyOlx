<!DOCTYPE html>
<html>
    <head>
        <title>Post Ad</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/index.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        
        
        <nav class="navbar navbar-fixed-top navbar_color" style="color:white;">
        <div class="container-fluid">
            <div class="navbar-brand navbar_color">
                <a href="#" style="color:white; text-decoration:none;">MyOLX</a>
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
      <br />
        
      <br />
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10" style="text-align:left; border:1px solid grey;">
                <h2>Submit an Ad</h2>
            </div>
            <div class="col-md-1"></div>
        </div> 
      <br />
      
      <div class="row">
          <div class="col-md-1"></div>
            <div class="col-md-10" style="text-align:left; border:1px solid grey; border-left:0px; border-top:0px; border-right:0px;">
                <h3>Item Details</h3>
            </div>
          <div class="col-md-1"></div>
        </div>
      <br/>
    <?php echo form_open_multipart('post_controller/postad'); ?>
      <div class="row">       
          <div class="col-md-4"><?php echo form_label('Ad Title'); ?> </div>
          <div class="col-md-8"><?php echo form_input('ATitle', NULL); ?> </div>
      </div>              
      <br />
       <div class="row">       
           <div class="col-md-4"><?php echo form_label('Item Price'); ?> </div>
           <div class="col-md-8"><?php echo form_input('APrice', NULL); ?></div>
       </div>  
      <br />

                    
       <div class="row">       
           <div class="col-md-4"> <?php echo form_label('Category'); ?> </div>      
           <div class="col-md-8"><?php echo form_dropdown('categories', $categories ); ?></div>
       </div> 
      <br />
            
       <div class="row">       
           <div class="col-md-4"> <?php echo form_label('Location'); ?> </div>      
           <div class="col-md-8"><?php echo form_dropdown('locations', $locations ); ?></div>
       </div>      
       <br />       
              
       <div class="row">       
           <div class="col-md-4"> <?php echo form_label('Upload Image'); ?> </div>      
           <div class="col-md-8"><?php echo form_upload('userfile'); ?></div>
       </div>      
       <br />            
       <br/>
<br/>
<br/>
<br/>
<br/>
       <?php echo form_submit('submitad','Post your Ad!'); ?>
       <?php echo form_close(); ?>
           <?php 
                if($postfail==1)
                {
                    echo "<div>Ad was not posted. Try again</div>";
                    echo "<br/>";
                    echo "<br/>";
                }

                ?>
        
</div>

        <!-- BOTTOM NAVBAR STARTED -->
    <nav class="nav navbar-fixed-bottom">
        <div class="container-fluid" style="text-align:center; color:white; background-color:black;">
            12L-4021 Zohaib Ahmed Butt
        </div>
    </nav>
    </body>
</html>

