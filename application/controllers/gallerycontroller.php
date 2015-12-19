<?php

class Gallerycontroller extends CI_Controller
{
    function __construct() {
        parent::__construct();
        
        $this->load->model('gallerymodel');
    }
    
    public function index()
            
    {
        $this->load->view('gallery');        
    }
    
    public function upload()
    {
        if($this->input->post('upload'))
        {
            $data['imgpath']=$this->gallerymodel->doUpload();
            $this->load->view('upload_success',$data);
        }
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

