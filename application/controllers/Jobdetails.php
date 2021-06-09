<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobdetails extends CI_Controller {
    public function index($mId)
    {
        if($this->session->userdata('uId')) {
            $data['profiles'] = $this->modUser->checkProfile(['uId' => $this->session->userdata('uId')]) ->row_array();
            $data['jobs'] = $this->modAdmin->checkModelById($mId);

            $this->load->view('templates/header');
            $this->load->view('templates/users/topbar', $data);
            $this->load->view('templates/jobdetails', $data);
            $this->load->view('templates/footer');
        }
        else {
            $this->load->view('templates/header');
            $this->load->view('templates/topbar');
            $this->load->view('templates/jobdetails');
            $this->load->view('templates/footer');
        }
    }
}