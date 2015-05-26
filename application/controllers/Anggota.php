<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('anggota_model');
	}
	public function dashboard()
	{
		$id_anggota = $this->session->userdata('username');
		// var_dump($id_anggota); 
		$data = array(
				'main'=>'anggota/dashboard',
				'data_pemesanan'=>$this->anggota_model->get_pemesanan_anggota($id_anggota),
				'sidebar'=>'layout/home/sidebar_anggota',
				'breadcrumb'=>'Dashboard'
			);
		// var_dump($data['data_pemesanan']);
		$this->load->view('layout/home/index', $data);	
	}


}

/* End of file Anggota.php */
/* Location: ./application/controllers/Anggota.php */