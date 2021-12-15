<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class ModAdmin extends CI_Model{
        
        public function checkAdmin($data)
        {
            return $this->db->get_where('admin', $data)
                ->result_array(); 
        }

        public function checkAdminById()
        {
            return $this->db->get_where('admin', array('aId'=>1))->result_array();
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
        public function fetchAllProducts()
        {
            $query = "tampil-product";
            $method = "GET";
            $data = "";

            $result = $this->auth->cekAPI($query, $method, $data);
            $data               = array();
            $data[]             = json_decode($result);
            var_dump($data);
            if ($data[0] != null) {
                $allProducts = $data[0]->values;
    
                return $allProducts;
            } else {
                $allProducts  = array();
    
                return $allProducts;
            }
        }

        // public function fetchAllProducts($limit, $start)
        // {
        //     $this->db->limit($limit, $start);
        //     $query = $this->db->get_where('products', array('pStatus'=>1));
        //     if($query->num_rows() > 0){
        //         foreach ($query->result() as $row) {
        //             $data[] = $row;
        //         }
        //         return $data;
        //     }
        //     return false;
        // }

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
            // var_dump($data);
            // $data['adminId'] = $this->session->userdata('aId');
            // $dataJson   = json_encode($data);
            // $query      = "tambah-model";
            // $method     = "POST";
            // $data       = $dataJson;
            // $result     = $this->auth->cekAPI($query, $method, $data);var_dump($result);
            // return $result;
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

        public function deleteUser($uId)
        {
            $this->db->where('uId', $uId);
            return $this->db->delete('users');
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

        public function count_all_categories()
        {
            return $this->db->get('categories')->num_rows();
        }

        public function job_categories()
        {
            $this->db->select('*');
            $this->db->from('products');
            $this->db->join('models', 'productId=pId');
            $query = $this->db->get();
            return $query->num_rows();
        }

        public function checkUserById($uId)
        {
            return $this->db->get_where('users', array('uId'=>$uId))->result_array();
        }

        public function fetchAllUsersAdmin($limit, $start)
        {
            $this->db->limit($limit, $start);
            $this->db->order_by('uId', 'asc');
            $this->db->limit('5');
            $query = $this->db->get_where('users', array('aId'=>1));
            if($query->num_rows() > 0){
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
        }

        public function fetchAllUsers($limit, $start)
        {
            $this->db->limit($limit, $start);
            $this->db->order_by('uId', 'desc');
            $this->db->limit('100');
            $query = $this->db->get_where('users', array('aId'=>1));
            if($query->num_rows() > 0){
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
        }

        public function fetchAllApplications($limit, $start)
        {
            $aId = $this->session->userdata('aId');
            $query = $this->db->query("SELECT invoices.id,
                                        invoices.status,
                                        invoices.userId,
                                        invoices.modelId,
                                        models.*,
                                        products.pName,
                                        users.*
                                    FROM
                                        invoices
                                    LEFT JOIN
                                        models
                                    ON
                                        invoices.modelId = models.mId
                                    LEFT JOIN
                                        users
                                    ON
                                        invoices.userId = users.uId
                                    LEFT JOIN
                                        products
                                    ON
                                        models.productId = products.pId
                                    WHERE 
                                        invoices.adminId = '$aId'
                                    ORDER BY 
                                        invoices.id
                                        DESC
                                    ");
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

        public function getAllApplications()
        {
            $aId = $this->session->userdata('aId');
            $query = $this->db->query("SELECT invoices.id,
                                        invoices.status,
                                        invoices.userId,
                                        invoices.modelId,
                                        models.*,
                                        products.pName,
                                        users.*
                                    FROM
                                        invoices
                                    LEFT JOIN
                                        models
                                    ON
                                        invoices.modelId = models.mId
                                    LEFT JOIN
                                        users
                                    ON
                                        invoices.userId = users.uId
                                    LEFT JOIN
                                        products
                                    ON
                                        models.productId = products.pId
                                    WHERE 
                                        invoices.adminId = '$aId'
                                    ORDER BY 
                                        invoices.id
                                        DESC
                                    ");
        $result = $query->num_rows();
        return $result;
        }

        public function jobListall()
        {
            $this->db->select('*');
            $this->db->from('products');
            $this->db->join('models', 'productId=pId');
            // $this->db->limit('4');
            $query = $this->db->get();
            return $query->result();
        }

        public function jobList()
        {
            $this->db->select('*');
            $this->db->from('products');
            $this->db->join('models', 'productId=pId');
            $this->db->limit('4');
            $query = $this->db->get();
            return $query->result();
        }

        public function jobRecent()
        {
            $this->db->select('*');
            $this->db->from('products');
            $this->db->join('models', 'productId=pId');
            $this->db->order_by('mId', 'desc');
            $this->db->limit('5');
            $query = $this->db->get();
            return $query->result();
        }

        public function jobListings()
        {
            $this->db->select('*');
            $this->db->from('products');
            $this->db->join('models', 'productId=pId');
            $query = $this->db->get();
            $result = $query->result_array();
            return $result;

        }

        public function jobListing()
        {
            $this->db->select('*');
            $this->db->from('products');
            $query = $this->db->get();
            $result = $query->result_array();
            return $result;
        }

        // public function newFetchAllModels($limit, $start)
        // {
        //     $this->db->select('*');
        //     $this->db->from('products');
        //     $this->db->join('models', 'productId=pId');
        //     $this->db->limit($limit, $start);
        //     $this->db->order_by('mId', 'asc');
        //     $query = $this->db->get();
        //     return $query->result();
        // }

        public function newFetchAllModels()
        {
            $query = "tampil-model";
            $method = "GET";
            $data = "";

            $result = $this->auth->cekAPI($query, $method, $data);
            $data               = array();
            $data[]             = json_decode($result);
            var_dump($data);
            if ($data[0] != null) {
                $allModels = $data[0]->values;
    
                return $allModels;
            } else {
                $allModels  = array();
    
                return $allModels;
            }
        }

        public function job_detail($mId)
        {
            $this->db->select('*');
            $this->db->join('models', 'productId=pId');
            return $this->db->get_where('products', array('mId'=>$mId))->result_array();
        }

        public function vacancy_detail($pId)
        {
            $this->db->select('*');
            $this->db->from('products');
            $this->db->join('models', 'productId=pId');
            $this->db->where('pId', $pId);
            $query = $this->db->get();
            return $query->result();
        }

        public function get_admin($aId)
        {
            $this->db->where('aId', $aId);
            $query = $this->db->get('admin');
            return $query->row();
        }

        public function updatePass($data, $adminId)
        {
            $this->db->where('aId', 1);
            return $this->db->update('admin', $data);
        }

        public function invoice()
        {
            date_default_timezone_set('Asia/Jakarta');
            
            foreach ($this->cart->contents() as $item) {
                
                $data = array(
                    
                );
            }

        }

        public function apply($data)
        {
            return $this->db->insert('invoices', $data);
        }

        public function getAllDataApply()
        {
            $query = $this->db->query("SELECT invoices.id,
                                        invoices.status,
                                        invoices.userId,
                                        invoices.modelId,
                                        models.mName,
                                        models.price,
                                        models.location,
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
                                    ORDER BY
                                        invoices.id
                                        DESC
                                    LIMIT 10
                                    ");
        $result = $query->result_array();
        return $result;
        }

        public function getDataById($id)
        {
            $query = $this->db->query("SELECT invoices.*,
                                            models.mName,
                                            models.mDescription,
                                            models.location,
                                            products.pName,
                                            users.*
                                        FROM
                                            invoices
                                        LEFT JOIN
                                            models
                                        ON
                                            invoices.modelId = models.mId
                                        LEFT JOIN
                                            users
                                        ON
                                            invoices.userId = users.uId
                                        LEFT JOIN
                                            products
                                        ON
                                            models.productId = products.pId
                                        WHERE
                                            invoices.id = '$id'
                                        ");
            return $query->row();
        }

        public function updateProccess($data, $id)
        {
            $this->db->where('id', $id);
            return $this->db->update('invoices', $data);
        }
        
    }