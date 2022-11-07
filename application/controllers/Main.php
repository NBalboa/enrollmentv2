<?php 
    class Main extends CI_Controller {


        public function __construct(){
            parent::__construct();
            $this->load->model('Admin');
        }

        public function index() {

            $current_user_id = $this->session->userdata('user_id');

            if(!$current_user_id){
                $this->load->view('user/dashboard');
            }
            else{
                echo 'User exist';
            }
        }

        public function admission() {
            $this->load->view('user/admission');
        }

        public function enlistment() {
            $this->load->view('user/enlistment');
        }

        public function process_login(){

            $result = $this->Admin->validate_login($this->input->post());

            if($result === 'valid'){
                $username = $this->input->post('username');
                $user = $this->Admin->get_admin_by_username($username);

                $result = $this->Admin->validate_login_match($user, $this->input->post('password'));

                if($result === 'success'){
                    $this->session->set_userdata(array('user_id' => $user['id']));
                    redirect('/');
                }
                else{
                    $this->session->set_flashdata('errors', $result);
                    redirect('/');
                }

            }
            else{
                $this->session->set_flashdata('errors', $result);
                redirect('/');
            }
        }
    }
?>