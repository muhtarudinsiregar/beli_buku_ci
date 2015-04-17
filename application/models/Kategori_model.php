<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

	public function tampil_kategori()
	{	$this->db->order_by("nama", "ASC");
		return $this->db->get('kategori')->result();
	}

	public function simpan($data)
	{
		$this->db->insert('kategori',$data);
	}

	public function edit($id)
	{
		return $this->db->get_where('kategori',array('id_ktgr'=>$id))->row();
	}

	public function update($data,$id)
	{
		$this->db->where('id_ktgr', $id);
		$this->db->update('kategori', $data); 
	}

	public function hapus($id)
	{
		$this->db->delete('kategori',array('id_ktgr'=>$id));
	}	

}

/* End of file Kategori_model.php */
/* Location: ./application/models/Kategori_model.php */