<!DOCTYPE html>
<html>
    <head>
        <title>Contact User</title>
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
       <h1>Contact</h1>
       <h2>Message the user who posted the ad, through our mailing servers with complete security</h2>
       <?php echo br(2); ?>

       <div class="col-md-1"></div>
       <div class="col-md-10" style="text-align: left;">
        <?php
        if($this->input->get('success')==0)
        {
            echo form_open('contact_controller/sendmail');
            echo form_label('Sender Address');
            $senderdata = array(
                  'name'        => 'sendmail',
                  'id'          => 'sendmail',
                  'value'       => $sendermail
                );
            echo form_input($senderdata);
            echo br();
            echo form_label('Receiver Address');
            $receiverdata = array(
                  'name'        => 'recemail',
                  'id'          => 'recemail',
                  'value'       => $receivermail[0]
                );
            echo form_input($receiverdata);
            echo br();
            echo form_label('Subject');
            $subjdata = array(
                  'name'        => 'subj',
                  'id'          => 'subj',
                  'value'       => ''
                );
            echo form_input($subjdata);
            echo br();
            echo form_label('Message');
            echo br();
            $data = array(
                            'name'        => 'txt_area',
                            'id'          => 'txt_area',
                            'value'       => '',
                            'rows'        => '15',
                            'cols'        => '100'
                          );

             echo form_textarea($data);
             echo br();
             echo form_submit('Send','Send');
             echo form_close();
        }
         if($this->input->get('success')==1)
         {
             echo "<div>Your Email was sent successfully</div>";
             echo br(15);
         }
         if($this->input->get('success')==2)
         {
             echo "<div>Your Email was not sent successfully</div>";
             echo br(15);
         }
         if($this->input->get('success')==3)
         {
             echo "<div>Sending Failed. Sender cannot be same as Receiver. Subject and Message can not be empty</div>";
             echo br(15);
         }
        ?>
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

