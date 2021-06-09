<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
    public function index()
    {
        if($this->session->userdata('uId')) {
            $data['profiles'] = $this->modUser->checkProfile(['uId' => $this->session->userdata('uId')]) ->row_array();

            $this->load->view('templates/header');
            $this->load->view('templates/users/topbar', $data);
            $this->load->view('templates/contact');
            $this->load->view('templates/footer');
        }
        else {
            $this->load->view('templates/header');
            $this->load->view('templates/topbar');
            $this->load->view('templates/contact');
            $this->load->view('templates/footer');
        }
    }
}