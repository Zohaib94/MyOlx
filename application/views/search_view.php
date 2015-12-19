<!DOCTYPE html>
<html>
    <head>
           
        <title>User Dashboard</title>
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
   
        <h1>Search</h1>
        <h2>Search for a mobile, vehicle or a laptop of your liking</h2>
        <br></br>
        <div class="row">
            
            <?php echo form_open('search_controller/SearchAds'); ?>
            <div class="col-md-4"> 
                <?php echo form_label('Category'); ?>
                <?php echo form_dropdown('categories', $categories ); ?>
            </div>
            <div class="col-md-4">
                <?php 
                 echo form_label('Location');
                 echo form_dropdown('locations', $locations ); ?>
            </div>
            <div class="col-md-4">
                <?php 
                 echo form_label('Title');
                 echo form_input('Title');
                 ?> 
                </div>
        </div>
        
        <div class="row">
            <div class="col-md-4">
            <?php
                 echo form_label('Minimum Price');
                 $min = array(
                     1 => (1*1000),
                     2 => (2*1000),
                     3 => (3*1000),
                     4 => (4*1000)
                 );
                 echo form_dropdown('minimum',$min); ?>
        </div>
            
            <div class="col-md-4">
              <?php
                 echo form_label('Maximum Price');

                 $max = array(
                     1 => (1*1000000),
                     2 => (2*1000000),
                     3 => (3*1000000),
                     4 => (4*1000000)
                 );
                 echo form_dropdown('maximum',$max); ?>
                 </div>
            <div class="col-md-4">
                <?php echo form_hidden('showsearchres', FALSE);
                 echo form_submit('search','Search');
                 ?>
            </div>

        </div>
                <?php
                if($res==true)
                {
                    $count=0;
                    foreach($results->result() as $row)
                    {
                        if($count%3==0)
                        {
                            echo "<div class='row'>";
                        }
                        $contacturl=  base_url()."index.php/contact_controller?uid=".$row->UserID."&success=0";
                        $rateurl= base_url()."index.php/rate_controller?uid=".$row->UserID."&var2=0";
                        echo "<div class='col-md-4'>";
                        echo "<h2>$row->ATitle</h2>";
                        echo "<img src=$row->AImage alt='Image Unavailable'/>";
                        echo br();
                        echo "<span>Price</span>"."<span>$row->APrice</span>";
                        echo br();
                        echo "<a href='$contacturl'>Contact Uploader</a>";
                        echo "&nbsp";
                        echo "<a href='$rateurl'>Rate Uploader</a>";
                        echo "</div>";
                        $count=$count+1;
                        if($count%3==0)
                        {
                            echo "</div>";
                        }
                        
                    }
                }
                
                echo br();
                ?>
</div>
<nav class="nav navbar-fixed-bottom">
        <div class="container-fluid" style="text-align:center; color:white; background-color:black;">
            12L-4021 Zohaib Ahmed Butt
        </div>
    </nav>
    </body>
    
</html>

