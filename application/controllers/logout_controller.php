<?php

class Logout_Controller extends CI_Controller
{
    function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        $this->load->model('login_model');
        if($this->login_model->Verify_Login()==1)
        {
            $this->session->sess_destroy();
            redirect('');
            echo $this->session->userdata('userName');
            echo "logged out successfully";
            }
            else
            {
                echo "session does not exist";
            }
    }
}