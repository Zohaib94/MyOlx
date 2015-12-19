<?php

class Gallerymodel extends CI_Model
{
    
    var $gallerypath;
    function __construct() {
        parent::__construct();
        $this->gallerypath = realpath(APPPATH."../images");
        $this->load->helper('html');
    }
    
    public function doUpload()
    {
        
        $config = array (
            'allowed_types'=> "jpg|jpeg",
            'upload_path' => $this->gallerypath
            
        
      );
       
        $this->load->library('upload',$config);
        $this->upload->do_upload();
        
        $upload_img = $this->upload->data();
        $img_path = base_url()."images/". $upload_img['file_name'];
        return $img_path;
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

