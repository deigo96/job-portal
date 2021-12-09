<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apply extends CI_Controller {
    public function index() {
        if($this->session->userdata('uId')) {
            $uId = $this->session->userdata('uId');
            $data['profiles'] = $this->modUser->checkProfile(['uId' => $this->session->userdata('uId')]) ->row_array();
            $apply['data']  = $this->modUser->getDataApply($uId);

            $this->load->view('templates/header');
            $this->load->view('templates/users/topbar', $data);
            $this->load->view('templates/users/activity',$apply);
            $this->load->view('templates/footer');
        }
    }
}