<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ForgetPassword extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
 }

 function index()
 {
   $this->load->library('form_validation');

        //validation rules
        $this->form_validation->set_rules('username', 'Password Hint', 'trim|required|max_length[255]');
		$this->form_validation->set_rules('passwordhint', 'Password Hint', 'trim|required|max_length[255]|callback_check_database');
        
         if($this->form_validation->run() == FALSE)
		   {	  
			 $this->load->view('includes/header');
			 $this->load->view('forgot_password');
			 $this->load->view('includes/footer');
		   }
		   else
		   {
			 redirect('home', 'refresh');
		   }

 }

 function check_database($passwordhint)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');
   $passwordhint = $this->input->post('passwordhint');

   //query the database
	$result = $this->user->forgetpassword($username, $passwordhint);

	if($result)
	   {
		 $sess_array = array();
		 foreach($result as $row)
		 {
		   $sess_array = array(
			 'username' => $row->firstname
		   );
		   $this->session->set_userdata('logged_in', $sess_array);
		   
		 }
		 return TRUE;
	   }
	   else
	   {
		 $this->form_validation->set_message('check_database', 'Invalid username or password hint!!!');
		 return false;
	   }
 }
}