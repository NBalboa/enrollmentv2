<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Program extends CI_Model{

        public function add_student_program($details){
            if($details['acad_prog'] === 'Bachelor of Science in Computer Science'){
                $abbr = 'BSCS';
            }
            elseif($details['acad_prog'] === 'Bachelor of Arts in Political Science'){
                $abbr = 'ABPS';
            }
            elseif($details['acad_prog'] === 'Bachelor of Science in Social Work'){
                $abbr = 'BSSW';
            }

            $query = "INSERT INTO programs(student_id, course_name, course_abbr, sy,created_at,updated_at)
                      VALUES (?,?,?,?,?,?)";
            $values = array(
                $this->security->xss_clean($details['id']),
                $this->security->xss_clean($details['acad_prog']),
                $this->security->xss_clean($abbr),
                $this->security->xss_clean($details['sy']),
                $this->security->xss_clean(date("Y-m-d H:i:s")),
                $this->security->xss_clean(date("Y-m-d H:i:s"))
            );

            return $this->db->query($query,$values);
        }

    }

?>