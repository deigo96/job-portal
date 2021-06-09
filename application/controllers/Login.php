<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
    public function index()
    {
        $this->load->view('login');
    }

    public function checkUser()
    {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run() == FALSE){
            echo "Something went wrong!!!";
        }
        else {
            $data['email'] = $this->input->post('email', true);
            $data['password'] = $this->input->post('password', true);
            $data['password'] = hash('md5', $data['password']);
            $user = $this->modUser->checkUser($data);
            if(count($user) == 1){
                switch ($user[0]['status']) {
                    case 0:
                        echo "user is not activate";
                        break;
                    
                    case 1:
                        if ($user[0]['password'] == $data['password']) {
                            $myActualUser = array(
                                'uId' => $user[0]['uId'],
                                'first_name' => $user[0]['first_name'],
                                'last_name' => $user[0]['last_name'],
                                'email' => $user[0]['email'],
                                'date' => $user[0]['date'],
                            );
                            $this->session->set_userdata($myActualUser);
                            if ($this->session->userdata('uId')) {
                                redirect('home');
                            }
                            else {
                                echo "session is not created";
                            }
                        }
                        else {
                                echo "invalid password";
                        }
                        break;
                    
                    case 2:
                        echo "The admin blocked you";
                        break;
                }
            }
            else {
                echo "Email or Password is not matched";
            }
        }

    }
}