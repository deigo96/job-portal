<?php

    function setFlashData($class, $message, $url)
    {
        $CI = get_instance();
        $CI->load->library('session');
        $CI->session->set_flashdata('class', $class);
        $CI->session->set_flashdata('message', $message);
        redirect($url);
    }

    function adminLoggedIn(){
        $CI = get_instance();
        $CI->load->library('session');

        if($CI->session->userdata('aId')){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }

    function getAdminId(){
        $CI = get_instance();
        $CI->load->library('session');

        if($CI->session->userdata('aId')){
            return $CI->session->userdata('aId');
        }
        else{
            return FALSE;
        }
    }

    function getProductId(){
        $CI = get_instance();
        $CI->load->library('session');

        if($CI->session->userdata('productId')){
            return $CI->session->userdata('productId');
        }
        else{
            return FALSE;
        }
    }

    function userLoggedIn(){
        $CI = get_instance();
        $CI->load->library('session');

        if($CI->session->userdata('uId')){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }

    function getUserId(){
        $CI = get_instance();
        $CI->load->library('session');

        if($CI->session->userdata('UId')){
            return $CI->session->userdata('uId');
        }
        else{
            return FALSE;
        }
    }