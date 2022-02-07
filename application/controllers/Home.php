<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Posts_model','pst');
		$this->load->model('Pendaftar_model','pd');
		$this->load->model('Kontak_model','km');
		$this->load->model('Slider_model','sm');
		$this->load->model('Jalur_model','jm');
	}
	public function index(){
		$data['posts'] = $this->pst->getPosts();
		$data['kontak'] = $this->km->getKontak();
		$data['slider'] = $this->sm->getSlider();
		$data['sd'] = $this->jm->getJalur(false,'sd');
        $data['warnasd'] = $this->jm->getJalur(false,'sd',true);
        $data['smp'] = $this->jm->getJalur(false,'smp');
        $data['warnasmp'] = $this->jm->getJalur(false,'smp',true);
        $data['smk'] = $this->jm->getJalur(false,'smk');
        $data['warnasmk'] = $this->jm->getJalur(false,'smk',true);
        $data['sma'] = $this->jm->getJalur(false,'sma');
        $data['warnasma'] = $this->jm->getJalur(false,'sma',true);
		$data['title'] = $this->db->get('config_page')->row()->title;
		$data['logo'] = $this->db->get('config_page')->row()->logo;
		$data['icon'] = $this->db->get('config_page')->row()->icon;
		$data['embed_lokasi'] = $this->db->get('config_page')->row()->embed_lokasi;
		$data['keywords'] = $this->db->get('config_page')->row()->meta_keyword;
		$data['description'] = $this->db->get('config_page')->row()->meta_description;
		$this->load->view('front/homepage',$data);
	}
	public function savepd(){
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
            if($this->pd->insertPendaftar($dataInsert)){
                redirect('home/success');
            }
		}
	}
	public function success(){
		$data['data'] = '';
		$this->load->view('front/success_page',$data);
	}
	public function detail_post($id_post){
		if($id_post){
			$data['detail_post'] = $this->pst->getPosts($id_post);
			$this->load->view('front/detail_post',$data);
		}else{
			show_404();
		}
	}
}
