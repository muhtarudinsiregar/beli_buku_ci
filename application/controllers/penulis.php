<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penulis extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Penulis_model');
	}
	public function index()
	{
		$data = array(
			'main'=>'penulis/list.php',
			'breadcrumb'=>'List Penulis',
			'data'=>$this->Penulis_model->tampil_penulis()
			);
		$this->load->view('layout/home/index.php', $data);
	}

	public function tambah()
	{
		$data =array(
			'main'=>'penulis/create.php',
			'breadcrumb'=>'Tambah Penulis'
			);
		$this->load->view('layout/home/index.php',$data);
	}
	public function simpan()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'profil' => $this->input->post('profil')
			);
		$this->Penulis_model->simpan($data);
		redirect('penulis');
	}
	public function edit($id)
	{
		$data =array(
			'main'=>'penulis/edit.php',
			'breadcrumb'=>'Ubah Kategori',
			'data'=>$this->Penulis_model->edit($id)
			);

		$this->load->view('layout/home/index.php',$data);
	}
	public function update($id)
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'profil' => $this->input->post('profil')
			);

		$this->db->where('id_pen', $id);
		$this->db->update('penulis', $data); 
		redirect('penulis');
	}
	public function hapus($id)
	{
		$this->Penulis_model->hapus($id);
		redirect('penulis');
	}
}

/* End of file penulis.php */
/* Location: ./application/controllers/penulis.php */