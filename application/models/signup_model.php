<?php

class Signup_Model extends CI_Model
{
    function __construct() {
        parent::__construct();
    }
    
    public function IsEmailPresent($email)
    {
        $query = $this->db->get_where('users', array('Uemail' => $email));
        $count = $query->num_rows();
        if($count>0)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    
    public function InsertUser($fname,$lname,$email,$phone,$pass,$pass2)
    {
        
        //if email is not in correct format, return 0;
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            
            $message = "Incorrect Email Format";
            echo "<script type='text/javascript'>alert('$message');</script>";
            
  
            return 0;
            
        }
        //check if email already present in db, then return 0;
        $count=$this->IsEmailPresent($email);
        if($count>0)
        {
            $message = "Email Already Registered";
            echo "<script type='text/javascript'>alert('$message');</script>";
            return 0;
        }
        //if fname contains numbers, return 0
        if(ctype_alpha($fname)==FALSE)
        {
            $message = "First Name must only have alphabets";
            echo "<script type='text/javascript'>alert('$message');</script>";
            return 0;
        }
        //convert fname to all small
        $fname = strtolower($fname);
        //if fname length is less than 3, return 0
        if(strlen($fname)<3)
        {
            $message = "First Name length too small";
            echo "<script type='text/javascript'>alert('$message');</script>";
            return 0;
        }
        //if lname contains numbers, return 0
        if(ctype_alpha($lname)==FALSE)
        {
            $message = "Last Name must only have alphabets";
            echo "<script type='text/javascript'>alert('$message');</script>";
            return 0;
        }
        //convert lname to all small
        $lname= strtolower($lname);
        //if lname length is less than 3, return 0
        if(strlen($lname)<3)
        {
            $message = "Last Name length too small";
            echo "<script type='text/javascript'>alert('$message');</script>";
            return 0;
        }
        //if length of phone != 10, return 0
        if(strlen($phone)!=10)
        {
            $message = "Phone number must have exact 10 digits";
            echo "<script type='text/javascript'>alert('$message');</script>";
            return 0;
        }
        //if phone string does not contain all numbers, return 0
        if(ctype_digit($phone)==FALSE)
        {
            $message = "Phone number must only have digits";
            echo "<script type='text/javascript'>alert('$message');</script>";
            return 0;
        }   
        //if length of password < 5, return 0
        if(strlen($pass)<5)
        {
            $message = "Password too small";
            echo "<script type='text/javascript'>alert('$message');</script>";
            return 0;
        }
        //if passwords are not equal, return 0
        if(strcmp($pass, $pass2)!=0)
        {
            $message = "Passwords do not match";
            echo "<script type='text/javascript'>alert('$message');</script>";
            return 0;
        }
        
        $data = array(
           'Uid' => NULL,
           'Fname' => $fname ,
           'Lname' => $lname ,
           'Uemail' => $email,
           'UPhone' => $phone,
           'UPass' => $pass
                );
        
        $this->db->insert('users', $data);
        $rowcount = $this->db->affected_rows();
        return $rowcount;
    }
    
    
}
