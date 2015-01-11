<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CreateMember extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
 }

 function index()
 {
   $this->load->library('form_validation');

        //validation rules
        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required|max_length[255]');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|max_length[255]');
        $this->form_validation->set_rules('email', 'Email Address', 'trim|required|min_length[8]|max_length[255]|valid_email|callback_check_if_email_exists');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|max_length[255]');
        $this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'trim|required|min_length[8]|matches[password]');
        $this->form_validation->set_rules('passwordhint', 'Password Hint', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('includes/header');
            $this->load->view('signup_form');
            $this->load->view('includes/footer');
            //signup();
        } else {
            $this->load->model('membership_model');

            if ($query = $this->membership_model->create_member()) {
                $data['account_created'] = "Your account has been created.<br />You may now login.";

                $this->load->view('includes/header');
                $this->load->view('login_view', $data);
                $this->load->view('includes/footer');
            } else {
                $this->load->view('includes/header');
                $this->load->view('signup_form');
                $this->load->view('includes/footer');
            }
        }

 }

}