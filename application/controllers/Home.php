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
		$home['posts'] = $this->pst->getPosts();
		$home['kontak'] = $this->km->getKontak();
		$home['slider'] = $this->sm->getSlider();
		$home['sd'] = $this->jm->getJalur(false,'sd');
        $home['warnasd'] = $this->jm->getJalur(false,'sd',true);
        $home['smp'] = $this->jm->getJalur(false,'smp');
        $home['warnasmp'] = $this->jm->getJalur(false,'smp',true);
        $home['smk'] = $this->jm->getJalur(false,'smk');
        $home['warnasmk'] = $this->jm->getJalur(false,'smk',true);
        $home['sma'] = $this->jm->getJalur(false,'sma');
        $home['warnasma'] = $this->jm->getJalur(false,'sma',true);
		$head['title'] = $this->db->get('config_page')->row()->title;
		$head['logo'] = $this->db->get('config_page')->row()->logo;
		$head['icon'] = $this->db->get('config_page')->row()->icon;
		$head['embed_lokasi'] = $this->db->get('config_page')->row()->embed_lokasi;
		$head['keywords'] = $this->db->get('config_page')->row()->meta_keyword;
		$head['description'] = $this->db->get('config_page')->row()->meta_description;
		$foot['logo'] = $this->db->get('config_page')->row()->logo;

		$this->load->view('front/head',$head);
		$this->load->view('front/nav');
		$this->load->view('front/homepage',$home);
		$this->load->view('front/foot',$foot);
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
			if($data['detail_post']->num_rows() < 1){
				show_404();
			}
			$head['title'] = $data['detail_post']->row()->title;
			$head['logo'] = $this->db->get('config_page')->row()->logo;
			$head['icon'] = $this->db->get('config_page')->row()->icon;
			$head['embed_lokasi'] = $this->db->get('config_page')->row()->embed_lokasi;
			$head['keywords'] = $this->db->get('config_page')->row()->meta_keyword;
			$head['description'] = $this->db->get('config_page')->row()->meta_description;
			$foot['logo'] = $this->db->get('config_page')->row()->logo;
			$this->load->view('front/head',$head);
			$this->load->view('front/nav');
			$this->load->view('front/detail_post',$data);
			$this->load->view('front/foot',$foot);
		}else{
			show_404();
		}
	}
}
