<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Kontak_model','km');
        if(!$this->session->userdata('admin_pkbm')){
            redirect('backadmin/login');
        }
    }
	public function index(){
        $data['view'] = 'back/kontak/index';
        $data['kontak'] = $this->km->getKontak()->result();
		$this->load->view('back/layouts',$data);
	}
    public function edit($id = false){
        if($id){
            if($this->input->method(TRUE) == "POST"){
                $dataInsert['tipe'] = $this->input->post('tipe');
                $dataInsert['kontak'] = $this->input->post('kontak');
                if($this->km->updateKontak($id,$dataInsert)){
                    redirect('backadmin/kontak');
                }
            }
            $data['view'] = 'back/kontak/edit';
            $data['data'] = $this->km->getKontak($id)->row();
		    $this->load->view('back/layouts',$data);
            
        }else{
            show_404();
        }
    }
    public function tambah(){
        if($this->input->method(TRUE) == "POST"){
            $dataInsert['tipe'] = $this->input->post('tipe');
            $dataInsert['kontak'] = $this->input->post('kontak');
            if($this->km->insertKontak($dataInsert)){
                redirect('backadmin/kontak');
            }
            
        }
        $data['view'] = 'back/kontak/tambah';
        // $data['data'] = $this->km->getKontak($id)->row();
		$this->load->view('back/layouts',$data);
    }
    public function hapus($id = false){
        if($id){
            if($this->km->deleteKontak($id)){
                redirect('backadmin/kontak');
            }
        }else{
            show_404();
        }
    }
}
