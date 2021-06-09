<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JobList extends CI_Controller {
    public function index()
    {
        $config['base_url'] = site_url('admin/allModels');
        $totalRows = $this->modAdmin->getAllModels();
        $config['total_rows'] = $totalRows;
        $config['per_page'] = 6;
        $config['uri_segment'] = 3;
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3): 0;
        $data['allJobs'] = $this->modAdmin->fetchAllModels($config['per_page'], $page);
        $data['links'] = $this->pagination->create_links();
        $data['jobList'] =$this->modAdmin->jobList();
        $data['total_vacancies'] = $this->modAdmin->count_all_vacancies();

        if($this->session->userdata('uId')) {
            $data['profiles'] = $this->modUser->checkProfile(['uId' => $this->session->userdata('uId')]) ->row_array();

            $this->load->view('templates/header');
            $this->load->view('templates/users/topbar', $data);
            $this->load->view('templates/list', $data);
            $this->load->view('templates/footer');
        }
        else {
            $this->load->view('templates/header');
            $this->load->view('templates/topbar');
            $this->load->view('templates/list');
            $this->load->view('templates/footer');
        }
    }

    public function jobDetail($mId)
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