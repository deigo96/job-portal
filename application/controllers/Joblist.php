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
            $this->load->view('templates/list', $data);
            $this->load->view('templates/footer');
        }
    }

    public function jobDetail($mId)
    {
        
        if($this->session->userdata('uId')) {
            $data['profiles'] = $this->modUser->checkProfile(['uId' => $this->session->userdata('uId')]) ->row_array();
            $data['jobs'] = $this->modAdmin->job_detail($mId);
            $data['models'] = $this->modAdmin->checkProductById($mId);


            $this->load->view('templates/header');
            $this->load->view('templates/users/topbar', $data);
            $this->load->view('templates/jobdetails', $data);
            $this->load->view('templates/footer');
        }
        else {
            $this->session->set_flashdata('error', 'Please Login First to Continue');
            redirect('home/login');
        }
    }

    public function add_to_cart($mId)
    {
        $data = $this->modUser->checkProfile($uId);
        $data = $this->modUser->find($mId);

        $data = array(
            'id' => $data[0]['mId'],
            'qty' => 1,
            'price' => $data[0]['price'],
            'name' => $data[0]['mName'],
            'pName' => $data[0]['pName'],
            'location' => $data[0]['location'],
            'uId' => $data[0]['uId'],
            'pId' => $data[0]['pId'],
        );
        $this->cart->insert($data);
        redirect('joblist/index');
        // $this->load->view('templates/header');
        // $this->load->view('templates/users/topbar', $viewdata);
        // $this->load->view('templates/users/activity', $data);
        // $this->load->view('templates/footer');
    }

    public function delete()
    {
        // $deleteItem = array(
        //     'rowid' => 'rowid',
        //     'qty'   => 0
        // );
        
        $this->cart->destroy();
        redirect('home');

    }

    public function activity()
    {
        if($this->session->userdata('uId')) {
            $viewdata['profiles'] = $this->modUser->checkProfile(['uId' => $this->session->userdata('uId')]) ->row_array();

            $this->load->view('templates/header');
            $this->load->view('templates/users/topbar', $viewdata);
            $this->load->view('templates/users/activity');
            $this->load->view('templates/footer');
        }
        else {
            $this->session->set_flashdata('error', 'Please Login First to Continue');
            redirect('home/login');
        }
    }

    public function job_category($pId)
    {
        if($this->session->userdata('uId')) {
            $viewdata['profiles'] = $this->modUser->checkProfile(['uId' => $this->session->userdata('uId')]) ->row_array();
            $data['jobs'] = $this->modAdmin->vacancy_detail($pId);
            $data['total_vacancies'] = $this->modAdmin->count_all_vacancies();
            
            $this->load->view('templates/header');
            $this->load->view('templates/users/topbar', $viewdata);
            $this->load->view('templates/job_category', $data);
            $this->load->view('templates/footer');
        }
        else {
            $this->session->set_flashdata('error', 'Please Login First to Continue');
            redirect('home/login');
        }
    }
}