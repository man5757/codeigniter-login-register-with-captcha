<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Membership_model extends CI_Model{
    
    function validate(){
        $this->db->where('email', $this->input->post('email'));
        $this->db->where('password', md5($this->input->post('password')));
        $query = $this->db->get('accounts');
        
        if($query->num_rows == 1){
            return true;
        }
    } 
    
    function create_member(){
        $email = $this->input->post('email');
        
        $new_member_insert_data = array(
            'email' => $this->input->post('email'),
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'password' => md5($this->input->post('password')),
            'hint' => $this->input->post('passwordhint'),
        );
        
        $insert = $this->db->insert('accounts', $new_member_insert_data);
        return $insert;
    }
    
    function check_if_email_exists($email){
        $this->db->where('email', $email);
        $result = $this->db->get('accounts');
        if($result->num_rows() > 0){
            return false;
        } else{
            return true;
        }
    }
    
    
}