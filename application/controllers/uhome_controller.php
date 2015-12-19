<?php

class Uhome_Controller extends CI_Controller
{
    function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        $this->load->model('login_model');
        if($this->login_model->Verify_Login()==1)
        {
            $data['username'] = $this->session->userdata('uFname');
            $this->load->view('uhome_view',$data);
        }
        else
        {
            //go to the landing page of the website
            redirect('');
        }
    }
    
}

