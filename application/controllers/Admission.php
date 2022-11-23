<?php

    class Admission extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('Student');
            $this->load->model('Program');
        }

        public function new_student () {
            // $student = $this->Student->get_student();
            // $details = array("id" => $student['id'], "acad_prog" => $student['acad_prog'], 'sy' => $this->input->post('sy'));
            // var_dump($details);
            // var_dump($student['id']);
            $result = $this->Student->validate_student($this->input->post());
            if ($result === 'valid'){
                $this->Student->add_student($this->input->post());
                $student = $this->Student->get_student();
                $details = array("id" => $student['id'], "acad_prog" => $student['acad_prog'], 'sy' => $this->input->post('sy'));
                $this->Program->add_student_program($details);
                redirect('admission');
            }
            else{
                $this->session->set_flashdata('input_errors', $result);
                redirect('admission');
            }
        }
    } 

?>