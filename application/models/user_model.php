


<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }   
    public function GetAll()
    {
        $this->load->database(); //Connect to DB
        $query = $this->db->query("SELECT * FROM user");
        $this->db->close();
        return $query->result();
            
    }
    
    public function insert_to_db($f1,$f2,$f3)
{
        $data = array(
   'UserID' => $f1 ,
   'UserName' => $f2 ,
   'UserCity' => $f3
);
$this->db->insert('user', $data);
return $this->db->affected_rows();

}

public function DeletefromDB($f1 /*id*/)
{
    $this->db->where('UserID',$f1);
    $this->db->delete('user');
    return $this->db->affected_rows();
}

public function UpdateDB($f1,$f2,$f3)
{
    $data = array(
               $f2 => $f3
            );

$this->db->where('UserID', $f1);
$this->db->update('user', $data); 
    return $this->db->affected_rows();
}
}
