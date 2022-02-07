<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftar extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Pendaftar_model','pm');
        if(!$this->session->userdata('admin_pkbm')){
            redirect('backadmin/login');
        }
    }
	public function index(){
        $data['view'] = 'back/pendaftar/index';
        $data['pendaftar'] = $this->pm->getPendaftar()->result();
		$this->load->view('back/layouts',$data);
	}
    public function edit($id = false){
        if($id){
            if($this->input->method(TRUE) == "POST"){
                $dataInsert['nis'] = $this->input->post('nis');
                $dataInsert['nisn'] = $this->input->post('nisn');
                $dataInsert['nama'] = $this->input->post('nama');
                $dataInsert['tempat_lahir'] = $this->input->post('tempat_lahir');
                $dataInsert['tanggal_lahir'] = $this->input->post('tanggal_lahir');
                $dataInsert['jk'] = $this->input->post('jk');
                $dataInsert['nik'] = $this->input->post('nik');
                $dataInsert['agama'] = $this->input->post('agama');
                $dataInsert['nama_ibu'] = $this->input->post('nama_ibu');
                $dataInsert['nama_ayah'] = $this->input->post('nama_ayah');
                $dataInsert['no_hp'] = $this->input->post('no_hp');
                $dataInsert['no_wa'] = $this->input->post('no_wa');
                $dataInsert['alamat'] = $this->input->post('alamat');
                if($this->pm->updatePendaftar($id,$dataInsert)){
                    redirect('backadmin/pendaftar');
                }
            }
            $data['view'] = 'back/pendaftar/edit';
            $data['data'] = $this->pm->getPendaftar($id)->row();
		    $this->load->view('back/layouts',$data);
            
        }else{
            show_404();
        }
    }
    public function tambah(){
        if($this->input->method(TRUE) == "POST"){
            $dataInsert['nis'] = $this->input->post('nis');
            $dataInsert['nisn'] = $this->input->post('nisn');
            $dataInsert['nama'] = $this->input->post('nama');
            $dataInsert['tempat_lahir'] = $this->input->post('tempat_lahir');
            $dataInsert['tanggal_lahir'] = $this->input->post('tanggal_lahir');
            $dataInsert['jk'] = $this->input->post('jk');
            $dataInsert['nik'] = $this->input->post('nik');
            $dataInsert['agama'] = $this->input->post('agama');
            $dataInsert['nama_ibu'] = $this->input->post('nama_ibu');
            $dataInsert['nama_ayah'] = $this->input->post('nama_ayah');
            $dataInsert['no_hp'] = $this->input->post('no_hp');
            $dataInsert['no_wa'] = $this->input->post('no_wa');
            $dataInsert['alamat'] = $this->input->post('alamat');
            $dataInsert['createdAt'] = date('Y-m-d H:i:s');
            if($this->pm->insertPendaftar($dataInsert)){
                redirect('backadmin/pendaftar');
            }
            
        }
        $data['view'] = 'back/pendaftar/tambah';
        // $data['data'] = $this->pm->getPendaftar($id)->row();
		$this->load->view('back/layouts',$data);
    }
    public function hapus($id = false){
        if($id){
            if($this->pm->deletePendaftar($id)){
                redirect('backadmin/pendaftar');
            }
        }else{
            show_404();
        }
    }
}
