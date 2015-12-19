<?php

class Form extends CI_Controller
{
    function __construct() {
        parent::__construct();
    }    
    public function index()
    {
        $this->load->view('formview');
    }   
    public function insert_into_db()
{
        $f1 = $_POST['f1'];
        $f2 = $_POST['f2'];
        $f3 = $_POST['f3'];
        $this->load->model('user_model');
        $res = $this->user_model->insert_to_db($f1,$f2,$f3);
    if($res>0)
    {
        $this->load->view('insert_success');
       
    }
    else
    {
        $this->load->view('insert_fail');
    }
}
public function delete()
{    $IDvalue = $_POST['DelID'];
    $this->load->model('user_model');
    $res=$this->user_model->DeletefromDB(intval($IDvalue)); 
    if($res>0)
    {
        $this->load->view("delete_success");
    }
    else
    {
        $this->load->view("delete_fail");
    }
}

public function update()
{
    $keyval = $_POST['RowID'];
    $colval = $_POST['cols'];
    $newval = $_POST['NewVal'];
    $this->load->model('user_model');
       $res = $this->user_model->updateDB($keyval,$colval,$newval);
    if($res>0)
    {
        $this->load->view('upd_succ');
       
    }
    else
    {
        $this->load->view('upd_fail');
    }
    
    
   
}
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

