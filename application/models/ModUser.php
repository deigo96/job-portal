<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ModUser extends CI_Model{
    public function checkUser($data)
    {
        return $this->db->get_where('users', $data)
                ->result_array(); 
    }

    public function getProfile($where = null)
    {
        $this->db->get_where('users', $where);

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

    public function find($mId)
    {
        $this->db->select('*');
        $this->db->from('products');
        $this->db->join('models', 'productId=pId');
        // $this->db->join('specs', 'modelId=mId', 'INNER');
        $this->db->where('mId', $mId);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
        // $result = $this->db->where('mId', $mId)
        //                     ->limit(1)
        //                     ->get('models');
        // if($result->num_rows() > 0) {
        //     return $result->row();
        // }
        // else {
        //     return array();
        // }
    }

    public function getDataApply($uId)
    {
        $query = $this->db->query("SELECT invoices.id,
                                        invoices.status,
                                        models.*,
                                        products.pName
                                    FROM
                                        invoices
                                    LEFT JOIN
                                        models
                                    ON
                                        invoices.modelId = models.mId
                                    LEFT JOIN
                                        products
                                    ON
                                        models.productId = products.pId
                                    WHERE 
                                        invoices.userId = '$uId'
                                    ");
        $result = $query->result_array();
        return $result;
    }

    public function getDataApplybyId($mId)
    {
        $query = $this->db->query("SELECT invoices.id,
                                        invoices.status,
                                        invoices.userId,
                                        invoices.modelId,
                                        models.*,
                                        products.pName
                                    FROM
                                        invoices
                                    LEFT JOIN
                                        models
                                    ON
                                        invoices.modelId = models.mId
                                    LEFT JOIN
                                        products
                                    ON
                                        models.productId = products.pId
                                    WHERE 
                                        invoices.modelId = '$mId'
                                    ");
        $result = $query->result_array();
        return $result;
    }
}