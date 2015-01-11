<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
   $this->load->helper(array('form', 'url', 'captcha'));
 }

 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');
   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
   $this->form_validation->set_rules('captcha', "Captcha", 'required');
	
	
	
		
   if($this->form_validation->run() == FALSE)
   {	  
     $this->load->view('includes/header');
     $this->load->view('login_view');
     $this->load->view('includes/footer');
   }
   else
   {
	 $this->session->unset_userdata('captchaWord');
     redirect('home', 'refresh');
   }

 }

 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');

   //query the database
	$result = $this->user->login($username, $password);
	
	$expiration = time()-7200; // Two hour limit
	$this->db->query("DELETE FROM captcha WHERE captcha_time < ".$expiration);	

	$sql = "SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?";
	$binds = array($_POST['captcha'], $this->input->ip_address(), $expiration);
	$query = $this->db->query($sql, $binds);
	$row = $query->row();

	if ($row->count == 0)
	{
		//$this->form_validation->set_message( 'captcha', 'Your answer was incorrect!' );
		echo "<b><span style='color:red'>** " . "You must submit the word that appears in the image" . "</span></b>";
	} 

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
		 $this->form_validation->set_message('check_database', 'Invalid username or password!!!');
		 return false;
	   }
 }
}