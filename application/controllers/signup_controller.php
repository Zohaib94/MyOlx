<?php

class Signup_Controller extends CI_Controller
{
    function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        $data['fail'] =0;
        $this->load->view('signupform',$data);
    }
    
    public function RegisterUser()
    {
        $fname = $_POST['FirstName'];
        $lname = $_POST['LastName'];
        $email = $_POST['Email'];
        $phone = $_POST['Phone'];
        $pass = $_POST['Pass1'];
        $pass2 = $_POST['Pass2'];
        
       
        $this->load->model('signup_model');
        $count = $this->signup_model->InsertUser($fname,$lname,$email,$phone,$pass,$pass2);
        
        if($count>0)
        {
            redirect('/login_controller');
        }
        else
        {
            $data['fail'] = 1;
            $this->load->view('signupform',$data);
            
        }
    }
}

