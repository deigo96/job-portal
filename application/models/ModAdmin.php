<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class ModAdmin extends CI_Model{
        
        public function checkAdmin($data)
        {
            return $this->db->get_where('admin', $data)
                ->result_array(); 
        }

        public function checkProfile($where=null)
        {
            return $this->db->get_where('admin', $where);
        }

        public function checkCategory($data)
        {
            return $this->db->get_where('categories', array('cDp' =>$data['cDp']));
        }

        public function addCategory($data)
        {
            return $this->db->insert('categories', $data);
        }

        public function getAllCategories()
        {
            return $this->db->get_where('categories', array('cStatus'=>1))->num_rows();
        }

        public function fetchAllCategories($limit, $start)
        {
            $this->db->limit($limit, $start);
            $query = $this->db->get_where('categories', array('cStatus'=>1));
            if($query->num_rows() > 0){
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
        }

        public function checkCategoryById($cId)
        {
            return $this->db->get_where('categories', array('cId'=>$cId))->result_array();
        }

        public function updateCategory($data, $cId)
        {
            $this->db->where('cId', $cId);
            return $this->db->update('categories', $data);
        }

        public function deleteCategory($cId)
        {
            $this->db->where('cId', $cId);
            return $this->db->delete('categories');
        }

        public function getCategories()
        {
            return $this->db->get_where('categories', array('cStatus' => 1));
        }

        public function checkProduct($data)
        {
            return $this->db->get_where('products', array(
                'pName' => $data['pName'],
                'categoryId' => $data['categoryId']
            ));
        }

        public function addProduct($data)
        {
            return $this->db->insert('products', $data);
        }

        public function getAllProducts()
        {
            return $this->db->get_where('products', array('pStatus'=>1))->num_rows();
        }

        public function fetchAllProducts($limit, $start)
        {
            $this->db->limit($limit, $start);
            $query = $this->db->get_where('products', array('pStatus'=>1));
            if($query->num_rows() > 0){
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
        }

        public function deleteProduct($pId)
        {
            $this->db->where('pId', $pId);
            return $this->db->delete('products');
        }

        public function checkProductById($pId)
        {
            return $this->db->get_where('products', array('pId'=>$pId))->result_array();
        }

        public function updateProduct($data, $pId)
        {
            $this->db->where('pId', $pId);
            return $this->db->update('products', $data);
        }

        public function getProducts()
        {
            return $this->db->select('pId,pName')
                ->from('products')
                ->where('pStatus', 1)
                ->get();
        }

        public function checkModel($data)
        {
            return $this->db->get_where('models', array(
                'mName' => $data['mName'],
                'productId' => $data['productId']
            ));
        }

        public function addModel($data)
        {
            return $this->db->insert('models', $data);
        }

        public function getAllModels()
        {
            return $this->db->get_where('models', array('mStatus'=>1))->num_rows();
        }

        public function fetchAllModels($limit, $start)
        {
            $this->db->limit($limit, $start);
            $this->db->order_by('mId', 'desc');
            $query = $this->db->get_where('models', array('mStatus'=>1));
            if($query->num_rows() > 0){
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
        }

        public function deleteModel($mId)
        {
            $this->db->where('mId', $mId);
            return $this->db->delete('models');
        }

        public function checkModelById($mId)
        {
            return $this->db->get_where('models', array('mId'=>$mId))->result_array();
        }

        public function updateModel($data, $modelID)
        {
            $this->db->where('mId', $modelID);
            return $this->db->update('models', $data);
        }

        public function getModels()
        {
            return $this->db->get_where('models', array('mStatus' => 1));
        }

        public function count_all_customers()
        {
            return $this->db->get('users')->num_rows();
        }

        public function count_all_products()
        {
            return $this->db->get('products')->num_rows();
        }
        public function count_all_vacancies()
        {
            return $this->db->get('models')->num_rows();
        }

        public function checkUserById($aId)
        {
            return $this->db->get_where('users', array('aId'=>$aId))->result_array();
        }

        public function fetchAllUsers($limit, $start)
        {
            $this->db->limit($limit, $start);
            $this->db->order_by('uId', 'desc');
            $query = $this->db->get_where('users', array('aId'=>1));
            if($query->num_rows() > 0){
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
        }

        public function getAllUsers()
        {
            return $this->db->get_where('users', array('aId'=>1))->num_rows();
        }

        public function jobList()
        {
            $this->db->select('*');
            $this->db->from('products');
            $this->db->join('models', 'productId=pId');
            $query = $this->db->get();
            return $query->result();
        }

    }