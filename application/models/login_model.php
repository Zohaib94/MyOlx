<?php

class Login_model extends CI_Model
{
    function __construct() {
        parent::__construct();
    }
    
    public function FindMailPass($email,$pass)
    {
        
        $queryres= $this->db->get_where('users',array('Uemail'=>$email, 'UPass' => $pass));
        $row = $queryres->row();
        if ($queryres->num_rows() > 0)
        {
            return $row->Uid;
        }
        else
        {
            
            return -1;
        }
    }
    
    public function StartSession($id)
    {
        $idn = intval($id);
        $queryres = $this->db->get_where('users',array('Uid' => $idn));
        $row = $queryres->row();
        $userdat = array(
            'userID' => $row->Uid,
            'userName' => $row->Uemail,
            'uFname' => $row->Fname
            );
        //add this array to session data
        $this->session->set_userdata($userdat);
//        check if the session has the values
        
    }
    
    public function Verify_Login()
    {
           $user = $this->session->userdata('userName');
   
           if (!($user)) { 
      
               return 0; 
   
               
           } 
   else 
       { 
      
       return 1;
   
       
       }
    }
}

