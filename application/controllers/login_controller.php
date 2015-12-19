<?php

class Login_controller extends CI_Controller
{
    function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        $this->load->view('login_form');
        $this->session->sess_destroy();
        
    }
    
    public function LoginUser()
    {
        
        $email = $_POST['Email'];
        $pass = $_POST['Pass'];
        
        $this->load->model('login_model');
        if($this->login_model->Verify_Login()==0)
        {
            $id = $this->login_model->FindMailPass($email,$pass);
            if($id != -1)
            {
                $this->login_model->StartSession($id);
                //echo login successful
                echo "<script type='text/javascript'>alert('Login successful!')</script>";
                //redirect to user homepage
                redirect('/uhome_controller');
            }
            else
            {
                //echo login un-successful, try again:
                echo "<script type='text/javascript'>alert('Login unsuccessful!')</script>";
                redirect('/login_controller');
            }
        
        }
        else
        {
            echo "<script type='text/javascript'>alert('Already Logged In!')</script>";
            //redirect to user homepage
            redirect('/uhome_controller');

        }
    
    
    }
}