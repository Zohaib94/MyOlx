<?php

class Webservice_Controller extends CI_Controller
{
    function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        
        $this->load->model('search_model');
        $tt="";
        $mxp=0;
        $mnp=0;
        $ctid=0;
        $lcid=0;
        if($_SERVER['REQUEST_METHOD']== "GET")
        {
            if(isset($_GET['name'])&&isset($_GET['min'])&&isset($_GET['max'])&&isset($_GET['cid'])&&isset($_GET['lid']))
            {
                $tt=$_GET['name'];
                $mnp=$_GET['min'];
                $mxp=$_GET['max'];
                $ctid=$_GET['cid'];
                $lcid=$_GET['lid'];
                $obj = $this->search_model->SearchArr($tt,$mnp,$mxp,$ctid,$lcid);
                $json = json_encode($obj);
                header("Content-type: application/json");
                print_r($json);
                
            }
            else
            {
                //set error header
                header("HTTP/1.1 400 Invalid Request");
                die("HTTP/1.1 400 Invalid Request: parameters must be non-empty");
            }
        }
    }   
}

