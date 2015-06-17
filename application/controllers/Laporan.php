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
		$data = $this->Laporan_model->export();
		$data_penjualan=[];
		$data_tanggal = [];

		foreach ($data as $value) {
			array_push($data_penjualan, $value->total);
			array_push($data_tanggal, $value->tanggal);
		}
		$data = [
			'main'=>'laporan/laporan',
			'breadcrumb'=>'Laporan',
			'sidebar'=>'layout/home/sidebar_admin',
			'data_penjualan'=>$data_penjualan,
			'data_tanggal'=>$data_tanggal
		];
		$this->load->view('layout/home/index', $data);

	}

	public function export()
	{
		// load library
		$this->load->library('dompdf_gen');
		$data = [
			'data_penjualan' => $this->Laporan_model->export(),
			'total' => $this->Laporan_model->total()
		];
		$this->load->view('laporan/generate',$data);
		// Get output html
		$html = $this->output->get_output();
		// Convert to PDF
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan penjualan.pdf");
	}

}

/* End of file Laporan.php */
/* Location: ./application/controllers/Laporan.php */