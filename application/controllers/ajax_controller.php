<?php

class Ajax_Controller extends CI_Controller
{
    public function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        $data['res'] = false;
        $this->load->model('post_model');
        $data['categories'] = $this->post_model->getAllCategories();
        $data['locations'] = $this->post_model->getAllLocations();
        $this->load->view('ajax_view',$data);
    }
    
    public function hello()
    {
        $this->load->model('search_model');
        $nm = $_GET["name"];
        $cat = $_GET["Catid"];
        $loc = $_GET["Locid"];
        $mnp = $_GET["Minp"];
        $mxp = $_GET["Maxp"];
        $this->load->model('search_model');
        $results=$this->search_model->Search($nm,$mnp,$mxp,$cat,$loc); 
        $data['res']=false;
        if($results)
        {
            $data['res']=true;
            $data["results"] =  $results;      
        }
        else {
            $data['sorry']="No Results Found! Try Again"; 
        }
        
        $this->load->view('hello',$data);
        
    }
}
