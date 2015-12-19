<?php

class Post_controller extends CI_Controller
{
    function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        $this->load->model('post_model');
        $data['categories'] = $this->post_model->getAllCategories();
        $data['locations'] = $this->post_model->getAllLocations();
        $data['postfail'] = 0;
        $this->load->view('postadform',$data);
    }
    
    public function postad()
    {
        $imag='';
        $UserID = $this->session->userdata('userID');
        $Adtitle= $_POST['ATitle'];
        $AdPrice= $_POST['APrice'];
        $CatID= $_POST['categories'];
        $LocID= $_POST['locations'];
        $this->load->model('login_model');
        if($this->login_model->Verify_Login()==1)
        {
            
        
            $this->load->model('gallerymodel');
            if($this->input->post('submitad'))
            {
                $data['imgpath']=$this->gallerymodel->doUpload();
                $imag= $data['imgpath'];
            }
            
            $this->load->model('post_model');
            $res=$this->post_model->InsertAd($imag,$AdPrice,$Adtitle,$CatID,$LocID,$UserID);
            if($res=="no")
            {
                //Post Failed
             
                $this->load->model('post_model');
                $data['categories'] = $this->post_model->getAllCategories();
                $data['locations'] = $this->post_model->getAllLocations();
                $data['postfail'] = 1;
                $this->load->view('postadform',$data);
            }
            else
            {
                //Post Successful
                redirect('/uhome_controller');
            }
        }
        else 
        {
            //show popup to login 
            redirect('/login_controller');
     
        }
        
    }
}
