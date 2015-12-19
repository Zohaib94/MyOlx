<?php


class Facebook_Controller extends CI_Controller
{
    public function index()
    {
        $this->load->library('facebook');
        redirect($this->facebook->login_url());
    }
    
    public function hello()
    {
        $this->load->model('facebook_model');
        $i = 0;
        $friends = array();
        $ads = array();
        $friends_arr=($this->facebook->get_friends());
        $friends_dat = $friends_arr['data'];
        foreach($friends_dat as $friend)
        {
             
            $friends[$i]=($friend->name);        
            //call the model function to get ads
            $ads[$i]=$this->facebook_model->GetAds($friend->name);
            $i=$i+1;
            
        }
        //return the ads to view
        $data['friends'] = $friends;
        $data['advertisments'] = $ads;
        $this->load->view('fb',$data);
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('http://localhost/CodeIgniter-2.2.1/index.php');
    }
}



