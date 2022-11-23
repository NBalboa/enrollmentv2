<?php
    class Student extends CI_Model{


        public function get_student(){
            return $this->db->query("SELECT * FROM students ORDER BY created_at DESC")->row_array();
        }

        public function add_student($post){

            $dob = date('Y-m-h', strtotime($post['dob'])); 
            if($post['same_address'] === "on"){
                $address_c = $post['c_street'] . ', ' .   $post['c_barangay'] . ', ' . $post['c_province'];
                $address = $post['c_street'] . ', ' .   $post['c_barangay'] . ', ' . $post['c_province'];
                $zip_c = $post['c_zipcode'];
                $zip = $post['c_zipcode'];
                $mobile_c = $post['c_mobileno'];
                $mobile = $post['c_mobileno'];
                $tel_c = $post['c_telpho'];
                $tel = $post['c_telpho'];

            }
            else{
                $address_c = $post['c_street'] . ', ' .   $post['c_barangay'] . ', ' . $post['c_province'];
                $address = $post['street'] . ', ' .   $post['barangay'] . ', ' . $post['province'];
                $zip_c = $post['c_zipcode'];
                $zip = $post['zipcode'];
                $mobile_c = $post['c_mobileno'];
                $mobile = $post['mobileno'];
                $tel_c = $post['c_telpho'];
                $tel = $post['telpho'];
            }

            $query = "INSERT INTO students(student_id, first_name, middle_name, last_name, gender, 
                    date_of_birth, place_of_birth, nationality, civil_status, tribe ,religion, 
                    current_address, current_zip, current_mobile ,current_telephone, permanent_address, 
                    permanent_zip, permanent_mobile, permanent_telephone, f_name, f_edu_attainment, 
                    f_occupation, m_name,m_edu_attainment, m_occupation, g_name, g_relationship, g_address, 
                    g_telephone, department, admission_type, enrol_stat, program, semester, acad_prog ,level,
                    created_at, updated_at)
                    VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $values = array(
                $this->security->xss_clean($post['student_id']),
                $this->security->xss_clean($post['first_name']),
                $this->security->xss_clean($post['middle_name']),
                $this->security->xss_clean($post['last_name']),
                $this->security->xss_clean($post['gender']),
                $this->security->xss_clean($dob),
                $this->security->xss_clean($post['pob']),
                $this->security->xss_clean($post['nationality']),
                $this->security->xss_clean($post['civil_status']),
                $this->security->xss_clean($post['tribe']),
                $this->security->xss_clean($post['religion']),
                $this->security->xss_clean($address_c),
                $this->security->xss_clean($zip_c),
                $this->security->xss_clean($mobile_c),
                $this->security->xss_clean($tel_c),
                $this->security->xss_clean($address),
                $this->security->xss_clean($zip),
                $this->security->xss_clean($mobile),
                $this->security->xss_clean($tel),
                $this->security->xss_clean($post['father_name']),
                $this->security->xss_clean($post['f_edu']),
                $this->security->xss_clean($post['f_occupation']),
                $this->security->xss_clean($post['mother_name']),
                $this->security->xss_clean($post['m_edu']),
                $this->security->xss_clean($post['m_occupation']),
                $this->security->xss_clean($post['guardian_name']),
                $this->security->xss_clean($post['relationship']),
                $this->security->xss_clean($post['g_address']),
                $this->security->xss_clean($post['g_contact']),
                $this->security->xss_clean($post['program']),
                $this->security->xss_clean($post['admission_type']),
                $this->security->xss_clean($post['enrol_stat']),
                $this->security->xss_clean($post['programs']),
                $this->security->xss_clean($post['semester']),
                $this->security->xss_clean($post['acad_prog']),
                $this->security->xss_clean($post['year_level']),
                $this->security->xss_clean(date("Y-m-d H:i:s")),
                $this->security->xss_clean(date("Y-m-d H:i:s"))
            );

            return $this->db->query($query, $values);
        }

        public function validate_student($post){

            $this->load->library('form_validation');

            $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
            $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
            $this->form_validation->set_rules('middle_name', 'Middle Name', 'trim|required');
            $this->form_validation->set_rules('dob', 'Date of Birth', 'trim|required');
            $this->form_validation->set_rules('pob', 'Place of Birth', 'trim|required');
            $this->form_validation->set_rules('civil_status', 'Civil Status', 'trim|required');
            $this->form_validation->set_rules('nationality', 'Nationality', 'trim|required');
            $this->form_validation->set_rules('religion', 'Religion', 'trim|required');
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