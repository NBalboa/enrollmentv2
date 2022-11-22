<?php

    class Admission extends CI_Controller {

        public function __construct()
        {
           parent::__construct();
           $this->load->model('Student');
        }
        public function add_student () {
            $result = $this->Student->validate_student($this->input->post());
            var_dump($result);
         }
    } 

?>