<html>
    <head>
           
        <title>Home Page</title>
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
    <h1>Welcome To MyOLX!</h1>
    <h2> Your One Stop Shop for buying and selling things </h2> 
    <?php echo br(3); ?>
    <h4>Featured Ads</h4>
    <div></div>
   
<?php
$count=0;
foreach($rows->result() as $row)
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
    
           if($count%3!=0)
           {
               while($count%3!=0)
               {
                   echo "<div class='col-md-4'></div>";
                   $count=$count+1;
               }
               echo "</div>";
               
           }
echo $this->pagination->create_links(); ?>
      
        
</div>
<nav class="nav navbar-fixed-bottom">
<div class="container-fluid" style="text-align:center; color:white; background-color:black;">
            12L-4021 Zohaib Ahmed Butt
        </div>
</nav>
    </body>
</html>