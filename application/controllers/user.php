


<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
    function __construct() {
        parent::__construct();

       
    }

    public function index() {
        
         $this->load->model('user_model'); //load model
         $data['users']=$this->user_model->GetAll();
         $this->load->view('users',$data);   
    }
    
}

