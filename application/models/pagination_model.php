<?php

class Pagination_Model extends CI_Model
{
    function __construct() {
        parent::__construct();
    }
    
    public function getAllAds()
    {
        return $this->db->get('ads');        
    }
}

