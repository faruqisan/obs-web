<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmployeeModel
 *
 * @author FRQ
 */
class EmployeeModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function loadDataBarang() {
        $query = $this->db->select('*')->from('tb_barang')->get();
        return $query->result();
    }

    public function simpanBarang($data) {
        $this->db->set($data);
        $this->db->insert($this->db->dbprefix . 'tb_barang');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    public function loadDataCustomer(){
        $query = $this->db->select('*')->from('tb_customer')->get();
        return $query->result();
    }
    public function searchCustomer($namaCustomer){
        $condition = "nama_customer ='" . $namaCustomer ."'";
        $this->db->select('*');
        $this->db->from('tb_customer');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
    

}
