<html>
    <head>
        <title>Ajax Search</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/index.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        
             <script>
            function loadtext()
            {
                var tit = document.getElementById('title').value;
                var catid = document.getElementById('categ_id').value;
                var locid = document.getElementById('locat_id').value;
                var minpri = document.getElementById('min').value;
                var maxpri = document.getElementById('max').value;
                var xmlhttp;
                if (window.XMLHttpRequest)
                  {// code for IE7+, Firefox, Chrome, Opera, Safari
                  xmlhttp=new XMLHttpRequest();
                  }
                else
                  {// code for IE6, IE5
                  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  
                  xmlhttp.onreadystatechange=function(){
                      if (xmlhttp.readyState==4 && xmlhttp.status==200)
                      {
                          document.getElementById('target').innerHTML = xmlhttp.responseText;
                          console.log(catid);
                          console.log(locid);
                          console.log(minpri);
                          console.log(maxpri);
                          
                      }
                  }
                  
                  xmlhttp.open("GET","<?php echo base_url('index.php/ajax_controller/hello?name='); ?>"+tit+"&Catid="+catid+"&Locid="+locid+"&Minp="+minpri+"&Maxp="+maxpri,true);
                  xmlhttp.send();
            }
        </script>
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
   
        <h1>Ajax Search</h1>
        <h2>Dynamic Search for a mobile, vehicle or a laptop of your liking</h2>
       
        <div class="row"> 
            <div class="col-md-4">
                Title:
                <input type="text" value="" id="title" />
            </div>
            <div class="col-md-4">
                Min price:
                <select id="min">
                     <option value="1">1000</option>
                     <option value="2">2000</option>
                     <option value="3">3000</option>
                     <option value="4">4000</option>
                </select>
            </div>
            <div class="col-md-4">
                Max price:
                <select id="max">
                     <option value="1">100000</option>
                     <option value="2">200000</option>
                     <option value="3">300000</option>
                     <option value="4">400000</option>
                </select>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4"> Category:
        <?php echo form_dropdown('categ',$categories ,'', 'class="categ_class" id="categ_id"') ?></div>
            <div class="col-md-4"> Location:
        <?php echo form_dropdown('locat',$locations ,'', 'class="locat_class" id="locat_id"') ?></div>
            <div class="col-md-4">Search:
        <button id="search" onclick="loadtext()">Search</button></div>
        </div>
      
        <div id="target" class="row"></div>
    </body>
</html>
</html>

