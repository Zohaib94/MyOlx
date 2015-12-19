<!DOCTYPE html>
<html>
    <head>
        <title>Rate User</title>
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
       <h1>Rating</h1>
       <h2>Store Rating in database for the user who posted the ad</h2>
       <?php echo br(2); ?>

       <div class="col-md-1"></div>
       <div class="col-md-10" style="text-align: left;">
                <?php 
                echo form_open("rate_controller?uid=".$this->input->get('uid')."&var2=1");


                echo form_label('ID of User being rated: ');
                echo $this->input->get('uid');
                echo br();
                echo form_label('ID of User rating: ');
                echo $id;
                echo br();
                echo form_label('Enter your rating for this User');

                echo br();

                $options=array(
                    1 => 1,
                    2 => 2,
                    3 => 3,
                    4 => 4,
                    5 => 5
                );
                echo form_dropdown('rating', $options);

                echo br(2);

                echo form_submit('Submit','Submit');

                echo form_close();

                echo br();

                if($ratefail==0)
                {
                    echo "<div>Rated Successfully</div>";
                    
                }

                if($ratefail==1)
                {
                    echo "<div>User can not rate himself</div>";
                }

                ?>
           
           <?php echo br(8); ?>
                </div>
       
       <div class="col-md-1"></div>
            </div>
        </div>
        <nav class="nav navbar-fixed-bottom">
        <div class="container-fluid" style="text-align:center; color:white; background-color:black;">
            12L-4021 Zohaib Ahmed Butt
        </div>
    </nav>  
    </body>
</html>