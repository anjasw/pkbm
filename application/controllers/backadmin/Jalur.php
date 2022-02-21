<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jalur extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Jalur_model','jm');
        if(!$this->session->userdata('admin_pkbm')){
            redirect('backadmin/login');
        }
    }
	public function index(){
        $data['view'] = 'back/jalur/index';
        $data['data'] = $this->jm->getJalur();
        if($this->input->method(TRUE) == "POST"){
            $insert['jalur_jenjang'] = $this->input->post('jalur_jenjang');
            $insert['tipe_jenjang'] = $this->input->post('tipe_jenjang');
            if($this->jm->insertJalur($insert)){
                redirect('backadmin/jalur');
            }
        }
		$this->load->view('back/layouts',$data);
	}
    public function edit($id = false){
        if($id){
            if($this->input->method(TRUE) == "POST"){
                // var_dump($filename);die();
                if($this->input->post('sd')){
                    $dataInsert['sd'] = $this->input->post('sd');
                }
                if($this->input->post('smp')){
                    $dataInsert['smp'] = $this->input->post('smp');
                }
                if($this->input->post('sma')){
                    $dataInsert['sma'] = $this->input->post('sma');
                }
                if($this->input->post('smk')){
                    $dataInsert['smk'] = $this->input->post('smk');
                }
                $dataInsert['jalur_jenjang'] = $this->input->post('jalur_jenjang');
                if($this->jm->updateJalur($id,$dataInsert)){
                    redirect('backadmin/jalur');
                }
            }
            $data['view'] = 'back/jalur/edit';
            $data['data'] = $this->jm->getJalur($id)->row();
            $this->load->view('back/layouts',$data);
            
        }else{
            show_404();
        }
    }
    public function tambah(){
        if($this->input->method(TRUE) == "POST"){
            // var_dump($this->uploadImgJalur());die();
            if($this->input->post('sd')){
                $dataInsert['sd'] = $this->input->post('sd');
            }
            if($this->input->post('smp')){
                $dataInsert['smp'] = $this->input->post('smp');
            }
            if($this->input->post('sma')){
                $dataInsert['sma'] = $this->input->post('sma');
            }
            if($this->input->post('smk')){
                $dataInsert['smk'] = $this->input->post('smk');
            }
            $dataInsert['jalur_jenjang'] = $this->input->post('jalur_jenjang');
            if($this->jm->insertJalur($dataInsert)){
                redirect('backadmin/jalur');
            }
        }
        $data['view'] = 'back/jalur/tambah';
        // $data['data'] = $this->jm->getJalur($id)->row();
		$this->load->view('back/layouts',$data);
    }
    public function hapus($id = false){
        if($id){
            if($this->jm->deleteJalur($id)){
                redirect('backadmin/jalur');
            }
        }else{
            show_404();
        }
    }
    public function uploadImgJalur(){
        $filename = 'pkbm_jalur_'.time();
        // var_dump($filename);
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|webp';
        $config['max_size']    = '2048';
        $config['overwrite'] = true;
        $config['file_name'] = $filename;
        $this->load->library('upload', $config);
        $this->upload->initialize($config); 
        if ($this->upload->do_upload('image')) { 
            // var_dump($this->upload->data());die();
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '', 'filename' => $filename);
            return $return;
        } else {
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }
}
