<?php

class Contact_Model extends CI_Model
{
    function __construct() {
        parent::__construct();
    }
    
    public function GetUserEmail($id)
    {
        //$res = $this->db->query("SELECT Uemail FROM users WHERE Uid=$id");
        $i=0;
        $data = array();
        $this->db->select('Uemail');
        $this->db->from('users');
        $this->db->where('Uid',$id);
        $query = $this->db->get();

        if($query->num_rows() > 0)
        {
            foreach ($query->result() as $row)
            {

                $data[$i]=$row->Uemail;  
                $i= $i+1;

            }
        }
        else
        {
            $data = array();
        }
        return $data;
    }
}

