<?php

class Session_Controller extends CI_Controller
{
    function __construct() {
        parent::__construct();
        
    }
    public function index()
    {
       
        $this->session->sess_destroy();
       $this->load->view('sessionform');
       $this->session->userdata('username');
       
    }
    public function startsess()
    {
       
        
        $userdat = array(
            'username' => $_POST['SessVal']
        );
        $this->session->set_userdata($userdat);
        
        $session_user = $this->session->userdata('username');
        $sessionid = $this->session->userdata('session_id');
        echo $sessionid;
        echo "<div></div>";
        echo $session_user;
        
    }
    
    public function VerifyLogin()
    {
     
       $user = $this->session->userdata('username');
   if (!($user)) { 
      $this->load->view('pleaselogin'); 
   } 
   else { 
      echo "loggedin";
   }
    }
}

