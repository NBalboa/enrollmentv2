<?php

    class Admission extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('Student');
        }

        public function new_student () {
            $result = $this->Student->validate_student($this->input->post());
            if ($result === 'valid'){
                $this->Student->add_student($this->input->post());
                redirect('admission');
            }
            else{
                $this->session->set_flashdata('input_errors', $result);
                redirect('admission');
            }
        }
    } 

?>