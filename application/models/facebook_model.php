<?php

class Facebook_Model extends CI_Model
{
    public function __construct() {
        parent::__construct();
    }
    
    public function GetID($name)
    {
        $names = explode(" ", $name);
        $querystring = "SELECT users.Uid FROM users WHERE users.Fname = '".strtolower($names[0])."' && users.Lname = '".strtolower($names[1])."';";
        //echo $querystring;
        $res = $this->db->query($querystring);
        return ($res->result_array()['0']['Uid']);
        //$res = $this->db->query("SELECT Uid FROM users WHERE users.Fname LIKE %".$name."% AND users.Lname LIKE %".$name. ");
    }
    
    public function GetAds($name)
    {
        $UserID = $this->facebook_model->GetID($name);
        
        $querystring = "SELECT * FROM ads WHERE ads.UserID=$UserID";
                
        $queryres=$this->db->query($querystring);
        
        
        if($queryres->num_rows>0)
        {
            return $queryres->result_array();
        }
        else 
        {
            echo "No ad present for this friend";
        }
        
    }
}

