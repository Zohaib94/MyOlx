<?php

class Contact_Controller extends CI_Controller
{
    function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        //check whether any user is logged in or not
        //if yes then
        $this->load->model('login_model');
        if($this->login_model->Verify_Login()==1)
        {
            $this->load->model('contact_model');
            $receiverid = $this->input->get('uid');
            //get user email on the base of the id. This will be the receiver email
            $data['receivermail']=$this->contact_model->GetUserEmail($receiverid);
            //$recipient = $this->contact_model->GetUserEmail($receiverid);
            //$receiver = $recipient[0];
            //get user email on the base of the id stored in session. This will be the sender email.
            $data['sendermail'] =$this->session->userdata('userName');
            $data['sent']=0;
            
            //now send this data to contact_view
            $this->load->view('contact_view',$data);
        }
        else
        {
        $message = "Please Log in First!";
            echo "<script type='text/javascript'>alert('$message');</script>";   
        redirect("/login_controller");
        }
    }
    
    public function sendmail()
    {
      $sender = $_POST['sendmail'];
      $receiver = $_POST['recemail'];
      $message = $_POST['txt_area'];
      $subject = $_POST['subj'];
      $config= Array(
          'protocol' => 'smtp',
          'smtp_host' => 'ssl://smtp.googlemail.com',
          'smtp_port' => 465,
          'smtp_user' => 'myolxwebproject@gmail.com',
          'smtp_pass' => 'password-='
      );
      
      $this->load->library('email',$config);
      $this->email->set_newline("\r\n");
      $this->email->from('myolxwebproject@gmail.com', 'Myolx');
      $this->email->to($receiver);  

      $this->email->subject($subject);
      $this->email->message($sender."says:".$message);	
      if($sender!=$receiver&&  strlen($subject)!=0&&strlen($message)!=0)
      {
        if($this->email->send())
        {
            redirect("/contact_controller?success=1");
        }

       else 
        {
            redirect("/contact_controller?success=2");    
        }

      }
      else
      {
          redirect("/contact_controller?success=3");
      }
    }    
}
