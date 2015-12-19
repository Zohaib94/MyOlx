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
    
    <h1>Facebook Friends Ads</h1>
    <h2>Ads posted by your FB friends who use this web application</h2>
     <a href="<?php echo base_url('/index.php/facebook_controller/logout'); ?>" >Logout</a>
    <br/>
    
    
<?php
$i=0;
foreach($friends as $frnd)
{
    echo "<h2>".$frnd."'s Ads on MyOlx</h2>";
    echo "<br/>";
    $count=0;
    foreach($advertisments[$i] as $ad)
    {
       
                        if($count%3==0)
                        {
                            echo "<div class='row'>";
                        }
                       
                        echo "<div class='col-md-4'>";
                        echo "<h4>".$ad['ATitle']."</h4>";
                        echo "<img src=".$ad['AImage']." alt='Image Unavailable'/>";
                        echo br();
                        echo "<span>Price</span><span>".$ad['APrice']."</span>";
                        echo br();
                        echo "</div>";
                        $count=$count+1;
                        if($count%3==0)
                        {
                            echo "</div>";
                        }
    }
    
    echo "<div></div>";
    
    $i = $i+1;
}

echo br(20);
?>

</div>
    </body>
</html>