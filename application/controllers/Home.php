<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller{
    public function index()
    {
        // $data['category'] = $this->modAdmin->checkCategoryById($cId);
        // // $data['models'] = $this->modAdmin->checkModelById($mId);
        // $data['products'] = $this->modAdmin->checkProductById($pId);
        // $viewData = [];
        // $viewData['products'] = $this->db->limit(12)->get('products')->result();
        // $this->pagination->initialize([
        //     'base_url'      => current_url(),
        //     'total_rows'    => $this->db->count_all_results('products')
        // ]);
        // $viewData['pagination'] = $this->pagination->create_links();
        // $data['models'] = $this->db->limit(12)->get('models')->result();
        // $data['products'] = $this->db->get('products')->result();
        // $data['categories'] = $this->db->get('categories')->result();

    
        if($this->session->userdata('uId')) {

            $data['profiles'] = $this->modUser->checkProfile(['uId' => $this->session->userdata('uId')]) ->row_array();

            $this->load->view('templates/header');
            $this->load->view('templates/users/topbar', $data);
            $this->load->view('templates/slider', $data);
            $this->load->view('templates/users/service', $data);
            $this->load->view('templates/footer');

        }
        else {
            $this->load->view('templates/header');
            $this->load->view('templates/topbar');
            $this->load->view('templates/slider');
            $this->load->view('templates/service');
            $this->load->view('templates/footer');
        }
    }

    public function login()
    {
        
        $this->load->view('templates/users/login');
    }

    public function redirectLogin()
    {
        if($this->session->userdata('uId') == false) {
            $this->session->set_flashdata('error', 'Please Login to Continue');
            redirect('home/login');
        }
        
    }

    public function checkUser()
    {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('error', 'Please check the required fields');
            redirect('home/login');
        }
        else {
            $data['email'] = $this->input->post('email', true);
            $data['password'] = $this->input->post('password', true);
            $data['password'] = hash('md5', $data['password']);
            $user = $this->modUser->checkUser($data);
            // $data['profiles'] = $this->modUser->checkProfile(['email' => $this->session->userdata('email') ])->row_array();
            $data['profiles'] = $this->modUser->checkUserById($uId);

            if(count($user) == 1){
                switch ($user[0]['aId']) {
                    case 0:
                        $this->session->set_flashdata('error', 'User is not activated');
                        redirect('home/login');
                        break;
                    
                    case 1:
                        if ($user[0]['password'] == $data['password']) {
                            $data = array(
                                'uId' => $user[0]['uId'],
                                'first_name' => $user[0]['first_name'],
                                'last_name' => $user[0]['last_name'],
                                'email' => $user[0]['email'],
                                'date' => $user[0]['date'],
                            );
                            $this->session->set_userdata($data);
                            if ($this->session->userdata('uId')) {
                                redirect('home', $data);
                            }
                            else {
                                $this->session->set_flashdata('error', 'Session is not created');
                                redirect('home/login');
                            }
                        }
                        else {
                            $this->session->set_flashdata('error', 'Invalid Password');
                            redirect('home/login');
                        }
                        break;
                    
                    case 2:
                        echo "The admin blocked you";$this->session->set_flashdata('error', 'The admin blocked you');
                        redirect('home/login');
                        break;
                }
            }
            else {
                $this->session->set_flashdata('error', 'Invalid email or password');
                        redirect('home/login');
            }
        }
        // $data['email'] = $this->input->post('email', true);
        // $data['password'] = $this->input->post('password', true);

        // if(!empty($data['email']) && !empty($data['password'])){
        //     $userdata = $this->modUser->checkUser($data);
        //     if(count($userdata) == 1 ){
        //         $forSession = array(
        //             'uId' => $userdata[0]['uId'],
        //             'first_name' => $userdata[0]['first_name'],
        //             'last_name' => $userdata[0]['last_name'],
        //             'email' => $userdata[0]['email']
        //         );
        //         $this->session->set_userdata($forSession);
        //         if($this->session->userdata('uId')){
        //             redirect('home');
        //         }
        //         else{
        //             echo 'session not created';
        //         }
        //     }
        //     else{
        //         $this->session->set_flashdata('error', 'Email or Password is not matched');
        //         redirect('home/login');
        //     }
        // }
        // else{
        //     $this->session->set_flashdata('error', 'Please check the required fields');
        //     redirect('home/login');
        // }

    }

    

    public function register()
    {

        $this->form_validation->set_rules('name', 'NAME','required');
        $this->form_validation->set_rules('address', 'ADDRESS','required');
        $this->form_validation->set_rules('email','EMAIL','required|valid_email|is_unique[users.email]', [
            'required' => 'Please check the required',
            'is_unique' => 'This email already exist'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Passwords does not match!!',
            'min_length' => 'The Password field be no shorter than 3 characters'
        ]);
        $this->form_validation->set_rules('password2', 'Password Confirmation', 'required|trim|min_length[3]|matches[password]', [
            'matches' => 'Passwords does not match',
            'min_length' => 'The Password field be no shorter than 3 characters'
        ]);
        if($this->form_validation->run() == FALSE) {
                $this->load->view('templates/users/register');
                $this->session->set_flashdata('error', 'Please check the required fields');
        }else {
            $data['name']   =    $this->input->post('name');
            $data['address'] =    $this->input->post('address');
            $data['email']  =    $this->input->post('email');
            $data['password'] =    md5($this->input->post('password'));
            $data['date'] = date('Y-m-d H:i:s');

            $this->modUser->register($data);

            setFlashData('alert-success', 'Please Login to Continue', 'home/login');
        }
    }

    public function logOut()
    {
        if($this->session->userdata('uId')) {
            $this->session->set_userdata('uId');
            $this->session->set_flashdata('error', 'You have successfully logged out');
            redirect('home/login');
        }
        else {

        }
    }
    
    public function userProfiles($uId)
    {
        if(userLoggedIn()) {
            if(!empty($uId) && isset($uId)) {
            // $data['profiles'] = $this->modUser->checkProfile(['uId' => $this->session->userdata('uId')]) ->row_array();
            $data['profiles'] = $this->modUser->checkUserById($uId);
                if(count($data['profiles']) > 0) {
                    $this->load->view('templates/header');
                    $this->load->view('templates/users/topbaruser', $data);
                    $this->load->view('templates/users/user_profiles', $data);
                    $this->load->view('templates/footer');
                }
                else{
                    echo "something wrong";
                }
            }
            else{
                echo "error";
            }
        }
        else {
            $this->session->set_flashdata('error', 'Please login first to continue');
            redirect('home/login');
        }
    }

    public function editProfile($uId)
    {
        if(userLoggedIn()) {
            if(!empty($uId) && isset($uId)) {
            // $data['profiles'] = $this->modUser->checkProfile(['uId' => $this->session->userdata('uId')]) ->row_array();
            $data['profiles'] = $this->modUser->checkUserById($uId);
                if(count($data['profiles']) > 0) {
                    $this->load->view('templates/header');
                    $this->load->view('templates/users/topbaruser', $data);
                    $this->load->view('templates/users/editProfile', $data);
                    $this->load->view('templates/footer');
                }
                else{
                   setFlashData('alert-danger', 'User not found', 'home/userProfiles');
                }
            }
            else{
                setFlashData('alert-danger', 'Something went wrong', 'home/userProfiles');
            }
        }
        else {
            $this->session->set_flashdata('error', 'Please login first to continue');
            redirect('home/login');
        }
    }

    public function updateProfile()
    {
        $data['address'] = $this->input->post('address', true);
        $data['education'] = $this->input->post('education', true);
        $data['skills'] = $this->input->post('skills', true);
        $uId = $this->input->post('xid', true);

        if(!empty($data['education']) && !empty($data['address']) && !empty($data['skills'])) {
            if(isset($_FILES['cv']) && is_uploaded_file($_FILES['cv']['tmp_name'])) {
                $path = realpath(APPPATH.'../assets/cv/');
                $config['upload_path'] = $path;
                $config['max_size'] = 3000;
                $config['allowed_types'] = 'docx|pdf';
                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('cv')) {
                    $error = $this->upload->display_errors();
                    // setFlashData('alert-danger', $error, 'home/userProfiles');
                    echo "upload error";
                }
                else {
                    $filename = $this->upload->data();
                    $data['cv'] = $filename['file_name'];
                }
            }

            if(isset($_FILES['image']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
                $path = realpath(APPPATH.'../assets/images/profile_pictures/');
                $config['upload_path'] = $path;
                $config['max_size'] = 500;
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('image')) {
                    $error = $this->upload->display_errors();
                    // setFlashData('alert-danger', $error, 'home/userProfiles');
                    echo "upload error";
                }
                else {
                    $filename = $this->upload->data();
                    $data['images'] = $filename['file_name'];
                }
            }

            $addData = $this->modUser->checkName($data);
            if($addData->num_rows() >= 1 ) {
                // setFlashData('alert-danger', 'Name already exist', 'home/userProfiles');
                echo "name or email already exist";
                $addData = $this->modUser->checkEmail($data);
                if($addData->num_rows() ==  1) {
                    // setFlashData('alert-danger', 'Email already exist', 'home/userProfiles');
                    echo "email already exist";
                }
            }
            else {
                $addData = $this->modUser->updateProfile($data, $uId);
                if($addData) {
                    setFlashData('alert-success', 'You have successfully updated your profile', 'home');
                    // echo "you have successfully updated your profile";
                }
            }
        }
        else {
            // $this->session->set_flashdata('error', "Please check the required fields");
            // redirect('home/userProfiles', $uId);
            echo "erorro";
        }
    }
    

}

