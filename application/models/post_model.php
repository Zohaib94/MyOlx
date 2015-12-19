<?php

class Post_model extends CI_Model
{
    function __construct() {
        parent::__construct();
    }
    
    public function getAllCategories()
    {
        $this->db->select('Catid,Catname');
        $queryres = $this->db->get('categories');
         foreach($queryres->result_array() as $row){
            $data[$row['Catid']]=$row['Catname'];
        }
        return $data;
        
    }
    
    public function getAllLocations()
    {
        $this->db->select('Locid,Locname');
        $queryres = $this->db->get('locations');
        foreach($queryres->result_array() as $row){
            $data[$row['Locid']]=$row['Locname'];
        }
        return $data;
    }
    
    public function InsertAd($image,$price,$title,$catid,$locid,$userid)
    { if(ctype_digit($price)==false)
        {
            //echo "Price can only be in digit form";
            return "no";
            
        }       
        if(ctype_alpha($title)==false)
        {
            //echo "Title can only have Alphabets";
            return "no";
        }       
        if($image=="http://localhost/CodeIgniter-2.2.1/images/")
        {
            //echo "Upload Image";
            return "no";
        }
        if(strlen($title)==0)
        {
            return "no";
        }
        if(strlen($price)<4)
        {
            return "no";
        }
        $data = array(
   'Aid' => NULL ,
   'AImage' => $image ,
   'APrice' => $price ,
   'ATitle' => $title ,
   'CatID' =>  $catid ,
   'LocID' =>  $locid ,
   'UserID' => $userid                    
);
$this->db->insert('ads', $data);  }
    
    
}

