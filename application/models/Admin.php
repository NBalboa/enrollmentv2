<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model {

    function get_admin_by_username($username){
        $query = "SELECT * FROM admins WHERE username=?";
        return $this->db->query($query, $this->security->xss_clean($username))->row_array();
    }

    function validate_login_match($user, $password){
        if(!$user){
            return "Invalid credentials";
        }
        elseif($user['password'] == $password){
            return "success";
        }
        else{
            return "Invalid credentials";
        }
    }

    // validate users inputs 
    public function validate_login($post){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if($this->form_validation->run()){
            return 'valid';
        }
        else{
            return array(validation_errors());
        }
    }
}