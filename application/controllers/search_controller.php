<?php

class Search_controller extends CI_Controller
{
    function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        $data['res'] = false;
        $this->load->model('post_model');
        $data['categories'] = $this->post_model->getAllCategories();
        $data['locations'] = $this->post_model->getAllLocations();
        $this->load->view('search_view',$data);
        
    }
    
      
    public function SearchAds()
    {
        $minp =  $_POST['minimum'];
        $maxp = $_POST['maximum'];
        $catid = $_POST['categories'];
        $locid = $_POST['locations'];
        $title = $_POST['Title'];
        $this->load->model('search_model');
        $results=$this->search_model->Search($title,$minp,$maxp,$catid,$locid);
        $data['res']=false;
        if($results->num_rows>0)
        {
            $data['res']=true;
            $data['results'] = $results;
            
        $this->load->model('post_model');
        $data['categories'] = $this->post_model->getAllCategories();
        $data['locations'] = $this->post_model->getAllLocations();
            $this->load->view('search_view',$data);
        }
 else {
     //show popup
            redirect('/search_controller');
 }
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

