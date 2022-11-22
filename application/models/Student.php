<?php
    class Student extends CI_Model{
        public function validate_student($post){
            $this->load->library('form_validation');

            $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
            $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
            $this->form_validation->set_rules('middle_name', 'Middle Name', 'trim|required');
            $this->form_validation->set_rules('dof', 'Date of Birth', 'trim|required');
            $this->form_validation->set_rules('pob', 'Place of Birth', 'trim|required');
            $this->form_validation->set_rules('civil_status', 'Civil Status', 'trim|required');
            $this->form_validation->set_rules('religion', 'Tribe', 'trim|required');
            $this->form_validation->set_rules('tribe', 'Tribe', 'trim|required');
            $this->form_validation->set_rules('c_street', 'House/Stret No.', 'trim|required');
            $this->form_validation->set_rules('c_barangay', 'Barangay/Town/City', 'trim|required');
            $this->form_validation->set_rules('c_province', 'Province/Country', 'trim|required');
            $this->form_validation->set_rules('c_zipcode', 'Zip Code', 'trim|required');
            $this->form_validation->set_rules('c_mobileno', 'Mobile Phone No.', 'trim|required');
            $this->form_validation->set_rules('c_telpho', 'Telephone No.', 'trim|required');


            if($this->form_validation->run()){
                return 'valid';
            }
            else{
                return array(validation_errors());
            }
        }
    }
?>