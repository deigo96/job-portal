<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Auth extends CI_Controllers{
        public function login(){
            $this->load->view('v_home');
        }

        public function register(){
            if(isset($_POST['register'])){
                $this->form_validation->set_rules('username', 'Username', 'required');

                if($this->form_validation->run() == FALSE){
                    echo 'Form validated';
                }
            }
            $this->load->view('signup');
        }
    }