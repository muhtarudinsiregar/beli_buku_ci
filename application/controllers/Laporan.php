<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Laporan_model');
			// $this->load->model('Kategori_model');
	}

	public function index()
	{
		$data = [
			'main'=>'laporan/laporan',
			'breadcrumb'=>'Laporan'
		];

		$this->load->view('layout/home/index', $data);

	}

	public function export()
	{

		// $this->load->view('laporan/generate', $data);
		$this->load->helper(array('dompdf','file'));
		$data = [
			'data_penjualan' => $this->Laporan_model->export(),
			'total' => $this->Laporan_model->total()
		];
		$html = $this->load->view('laporan/generate',$data,true);
		pdf_create($html,'laporan.pdf');
		// $data_pdf = pdf_create($html,'',false);
		// write_file('laporan.pdf',$data_pdf);
		// var_dump($data['total']);


	}

}

/* End of file Laporan.php */
/* Location: ./application/controllers/Laporan.php */