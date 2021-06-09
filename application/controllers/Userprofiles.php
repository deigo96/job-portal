<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userprofiles extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index($uId)
    {
        // if($this->session->userdata('uId')) {
        //     // $data['profiles'] = $this->modUser->checkProfile(['uId' => $this->session->userdata('uId')]) ->row_array();
        //     $viewdata['users'] = $this->modUser->checkUserById($uId);

        //     // $data['user'] = $this->modUser->checkUser($data);

        //     $this->load->view('templates/header');
        //     $this->load->view('templates/users/topbar', $data);
        //     $this->load->view('templates/users/user_profiles');
        //     $this->load->view('templates/footer');
        // }
        // else {
        //     $this->session->set_flashdata('error', 'Please login first to continue');
        //     redirect('home/login');
        // }
        if(userLoggedIn()) {
            if(!empty($uId) && isset($uId)) {
                $data['users'] = $this->modUser->checkUserById($uId);
                if(count($data['users']) == 1) {
                    $this->load->view('templates/header');
                    $this->load->view('templates/users/topbar', $data);
                    $this->load->view('templates/users/user_profiles', $data);
                    $this->load->view('templates/footer');
                }
            }
        }
    }

    public function editProfile($uId) 
    {
        if(userLoggedIn()) {
            if(!empty($uId)) {
            $data['user'] = $this->modUser->checkUserById($cId);
            if(count($data['user']) == 1) {

            }
            }
        }
    }

    public function updateProfile()
    {
        if(userLoggedIn()) {
            $data['name'] = $this->input->post('userName', true);
            $data['email'] = $this->input->post('userEmail', true);
            $data['address'] = $this->input->post('userAddress', true);
            $data['education'] = $this->input->post('userEducation', true);
            $data['skills'] = $this->input->post('userSkills', true);
            if(!empty($data['education']) && isset($data['skills']) && !empty($data['address'])) {
                if(isset($_FILES['images']) && is_uploaded_file($_FILES['images']['tmp_name'])) {
                    $path = realpath(APPPATH.'../assets/images');
                    $config['upload_path'] = $path;
                    $config['max_size'] = 400;
                    $config['allowed_types'] = 'gif|png|jpg|jpeg';
                    $this->load->library('upload', $config);
                    if(!$this->upload->do_upload('images')) {
                        $error = $this->upload->display_errors();
                        setFlashData('alert-danger', $error, 'userprofiles');
                    }
                    else {
                        $fileName = $this->upload->data();
                        $data['images'] = $fileName['file_name'];
                        $data['adminId'] = getAdminId();
                    }
                }

                $addData = $this->modUser->checkData($data);
                if($addData->num_rows() > 0) {
                    setFlashData('alert-danger', 'Name already exist', 'userprofiles');
                }
                else {
                    $addData = $this->modUser->addProfile($data, $uId);
                    if($addData) {

                        setFlashData('alert-success', 'Profile Has Been Updated', 'userprofiles');
                    }
                    else {
                        setFlashData('alert-danger', 'You can not update your profile', 'userprofiles');
                    }
                }
            }
            else {
                setFlashData('alert-danger', 'Name is required', 'userprofiles');
            }
        }
        else {
            setFlashData('alert-danger', 'Please login first to edit your profile', 'home/login');
        }

    //         $this->form_validation->set_rules('name', 'Username', 'trim|required|min_length[4]|max_length[50]');
    //         $this->form_validation->set_rules('email', 'Email', 'trim|required');
    //         $this->form_validation->set_rules('address', 'Address', 'trim|required');
    //         $this->form_validation->set_rules('education', 'Education', 'trim|required');
    //         $this->form_validation->set_rules('skills', 'Skills', 'trim|required');

    //         $uId = $this->session->userdata('uId');
    //         $data = array(
    //             'name' => $this->input->post('name'),
    //             'email' => $this->input->post('email'),
    //             'address' => $this->input->post('address'),
    //             'education' => $this->input->post('education'),
    //             'skills' => $this->input->post('skills'),
    //         );
    //         if($this->form_validation->run() = TRUE) {
    //             if(!empty($_FILES['image']['name'])) {
    //                 $upload = $this->_do_upload();
    //                 $data['image'] =   $upload;
    //             }
    //             $result = $this->modUser->update($data, $uId);
    //             if($result > 0) {
    //                 $this->updateProfil();
    //                 $this->session->set_flashdata('error', 'Profile has been updated');
    //                 redirect('Userprofiles');
    //             }
    //             else {
    //                 $this->session->set_flashdata('error', 'Can not update');
    //                 redirect('Userprofiles');
    //             }
    //         }
    //         else {
    //             $this->session->set_flashdata('error', '');
    //                 redirect('Userprofiles');
    //         }
        }
    //     private function _do_upload()
    // {
    //     $config['upload_path']          = 'assets/images/';
    //     $config['allowed_types']        = 'gif|jpg|png';
    //     $config['max_size']             = 100; //set max size allowed in Kilobyte
    //     $config['max_width']            = 1000; // set max width image allowed
    //     $config['max_height']           = 1000; // set max height allowed
    //     $config['file_name']            = round(microtime(true) * 1000);
    //     $this->load->library('upload', $config);

    //     if (!$this->upload->do_upload('image')) {
    //         $this->session->set_flashdata('error', $this->upload->display_errors('', ''));
    //         redirect('Userprofile');
    //     }
    //     return $this->upload->data('file_name');
    // }
}