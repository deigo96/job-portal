<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ModUser extends CI_Model{
    public function checkUser($data)
    {
        return $this->db->get_where('users', $data)
                ->result_array(); 
    }

    public function getProfile()
    {
        $profiles = array();
        $this->db->select('first_name, last_name, email, link');
        $this->db->from('users');

        $query = $this->db->get();

        if($query->num_rows() >0 ){
            $profiles = $query->result();
        }
        return $profiles;

    }
    public function checkProfile($where=null)
    {
        return $this->db->get_where('users', $where);
    }

    public function register($data)
    {
        $this->db->insert('users', $data);
    }

    public function checkData($data)
        {
            return $this->db->get_where('users', array(
                'name' => $data['name'],
                'email' => $data['email'],
                'uId' => $data['uId']
            ));
        }

    public function updateProfile($data, $uId)
    {
        $this->db->where('uId', $uId);
        return $this->db->update('users', $data);
    }

    public function checkUserById($uId)
    {
        return $this->db->get_where('users', array('uId'=>$uId))->result_array();
    }

    public function addProfile($data)
    {
        return $this->db->insert('users', $data);
    }

    public function update($data, $uId)
    {
        $this->db->where($this->uId, $uId);
        $this->db->update($this->table, $data);
        return $this->db->affected_rows();
    }

    public function checkName($data)
    {
        return $this->db->get_where('users', array(
            'name' => $data['name']
        ));
    }

    public function checkEmail($data)
    {
        return $this->db->get_where('users', array(
            'email' => $data['email']
        ));
    }
}