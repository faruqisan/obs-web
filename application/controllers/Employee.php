<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Employee
 *
 * @author FRQ
 */
class Employee extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('employeemodel');
    }

    function index() {
        $this->load->view('employeeview');
    }

    function menuBarang() {
        $data ['query'] = $this->employeemodel->loadDataBarang();
        $this->load->view('menubarang', $data);
    }

    function viewTambahBarang() {
        $this->load->view('tambahbarang');
    }

    function simpanBarang() {
        $data = array(
            'nama_barang' => $this->input->post('namaBarang'),
            'category_barang' => $this->input->post('kategoriBarang'),
            'harga_barang' => $this->input->post('hargaBarang'),
            'stock_s' => $this->input->post('stockS'),
            'stock_m' => $this->input->post('stockM'),
            'stock_l' => $this->input->post('stockL'),
            'stock_xl' => $this->input->post('stockXL')
        );
        $result = $this->employeemodel->simpanBarang($data);
        if ($result == TRUE) {
            redirect('/Employee/MenuBarang');
        } else {
            echo '<script>alert("error")</script>';
        }
    }
    
    public function getDetailBarang($namaBarang){
        $query = $this->employeemodel->loadDataBarang();
        foreach ($query as $row):
            if($row->nama_barang = $namaBarang){
                $barang = array (
                    "hargaBarang"=>$row->hargaBarang,
                    "stockS"=>$row->stock_s,
                    "stockM"=>$row->stock_m,
                    "stockL"=>$row->stock_l,
                    "stockXL"=>$row->stock_xl,
                    );
                    echo json_encode($barang);
            }
        endforeach;
    }
    
    public function tesBarang($namaBarang){
        $query = $this->employeemodel->loadDataBarang();
        foreach ($query as $row):
            if(strcasecmp($row->nama_barang, $namaBarang)=0){
                echo 'nama barang'.$row->nama_barang.'<br>';
                echo 'harga barang '.$row->harga_barang.'<br>';
                echo 'stock s barang '.$row->stock_s.'<br>';
                break;
            }
        endforeach;
    }

    function menuTransaksi() {
        $data ['namaBarang'] = $this->getNamaCustomerAsJScriptVar();
        $this->load->view('menutransaksi', $data);
    }

    function getNamaCustomerAsJScriptVar() {
        $query = $this->employeemodel->loadDataCustomer();
        $namaCustomer = array();
        foreach ($query as $row):
            $namaCustomer[] = $row->nama_customer;
        endforeach;
        return $namaCustomer;
    }
    
    

    function submitCustName() {
        //$query = $this->employeemodel->loadDataCustomer();
        $inputed = $this->input->post('customerNameInput');

        $searchResult = $this->employeemodel->searchCustomer($inputed);

        if ($searchResult == FALSE) {
            //load create customer view
            $this->load->view('superadm');
        } else {
            //load menu transaksi
            foreach ($searchResult as $row):
                $data['namaCustomer'] = $row->nama_customer;
                $data['alamatCustomer'] = $row->alamat_customer;
                $data['kotaCustomer'] = $row->kota_customer;
                $data['lineCustomer'] = $row->id_line;
                $data['emailCustomer'] = $row->email;
                $data['phoneCustomer'] = $row->no_handpone;
                $data['dataBarang']= $this->employeemodel->loadDataBarang();
                $this->load->view('DetailTransaksi',$data);
            endforeach;
            
        }
    }

}
