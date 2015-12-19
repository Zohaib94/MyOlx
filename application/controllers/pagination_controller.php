<?php

class Pagination_Controller extends CI_Controller
{
    function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        $this->load->model('pagination_model');
        $this->load->library('table');
        $queryres = $this->pagination_model->getAllAds();
        
        $this->load->library('pagination');
        $config['base_url'] = base_url('/index.php/pagination_controller/index');
        $config['total_rows'] = $this->db->get('ads')->num_rows();
        $config['per_page'] = 3; 
        $config['num_links'] = ($config['total_rows']/$config['per_page'])+1;
        $config['uri_segment'] = 3;
        $data['rows'] = $this->db->get('ads', $config['per_page'], $this->uri->segment(3));
        $this->pagination->initialize($config); 
        $this->load->view('pagination_view',$data);
    }
}

