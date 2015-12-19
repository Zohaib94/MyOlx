<?php

class Rate_Controller extends CI_Controller
{
    function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        $this->load->model('login_model');
        if($this->login_model->Verify_Login()==1)
        {
            $data['id'] = $this->session->userdata('userID');

            if($this->input->get('var2')==1)
            {

                $raterid = $this->session->userdata('userID');
                $ratedid = $this->input->get('uid');
                $rating = $_POST['rating'];
                if($raterid!=$ratedid)
                {
                    $this->load->model('rate_model');
                    $this->rate_model->rate($raterid,$ratedid,$rating);
                    $data['ratefail'] = 0;
                    $this->load->view('rate_view',$data);
                }
                else 
                {
                   $data['ratefail'] = 1;
                   $this->load->view('rate_view',$data);

                }

            }
            else
            {
                $data['ratefail'] = 2;
                $this->load->view('rate_view',$data);
            }
        }
        else {
            $message = "Please Log In First";
            echo "<script type='text/javascript'>alert('$message');</script>";
            redirect('/login_controller');
        }
    }
    
}

