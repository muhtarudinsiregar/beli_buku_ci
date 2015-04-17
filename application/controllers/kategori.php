<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Kategori_model');
	}

	public function index()
	{
		$data = array(
			'main'=>'kategori/list.php',
			'breadcrumb'=>'List Kategori',
			'data'=>$this->Kategori_model->tampil_kategori()
			);
		$this->load->view('layout/home/index.php', $data);
	}

	public function tambah()
	{
		$data =array(
			'main'=>'kategori/create.php',
			'breadcrumb'=>'Tambah Kategori'
			);
		$this->load->view('layout/home/index.php',$data);
	}
	public function simpan()
	{
		$data = array(
			'nama'=>$this->input->post('kategori')
			);
		// var_dump($data);
		$this->Kategori_model->simpan($data);
		redirect('kategori');
	}
	public function edit($id)
	{
		$data =array(
			'main'=>'kategori/edit.php',
			'breadcrumb'=>'Ubah Kategori',
			'data'=>$this->Kategori_model->edit($id)
			);
		// var_dump($data['kategori']);
		$this->load->view('layout/home/index.php',$data);
	}
	public function update($id)
	{
		$data = array(
			'nama' => $this->input->post('kategori'),
			);

		$this->db->where('id_ktgr', $id);
		$this->db->update('kategori', $data); 
		redirect('kategori');
	}
	public function hapus($id)
	{
		$this->Kategori_model->hapus($id);
		redirect('kategori');
	}

}

/* End of file kategori.php */
/* Location: ./application/controllers/kategori.php */