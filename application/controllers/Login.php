<?php

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('loginmodel');
    }

    public function index() {
        $this->load->view('loginView');
    }

    public function processLogin() {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );
            $result = $this->loginmodel->login($data);
            if ($result == TRUE) {
                $username = $this->input->post('username');
                $resultInfo = $this->loginmodel->read_user_information($username);
                
                $usertype = $resultInfo[0]->privilage;
                switch ($usertype){
                    case "admin":
                        $session_data = array(
                            'username' => $resultInfo[0]->username,
                            'privilage' => $resultInfo[0]->privilage
                        );
                        $this->session->set_userdata('logged_in', $session_data);
                        redirect('/Employee');
                        //$this->load->view('admin');
                        break;
                    case "superadmin":
                        $session_data = array(
                            'username' => $resultInfo[0]->username,
                            'privilage' => $resultInfo[0]->privilage
                        );
                        $this->session->set_userdata('logged_in', $session_data);
                        $this->load->view('superadm');
                        break;
                    default :
                }
                
            } else {
                //wrong usename & pass;
                $this->load->view('loginview');
            }
        }

    public function logout() {

// Removing session data
        $sess_array = array(
            'username' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        //$data['message_display'] = 'Successfully Logout';
        $this->load->view('loginView');
    }

}

?>