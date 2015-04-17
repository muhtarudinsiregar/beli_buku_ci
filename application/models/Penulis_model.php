<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penulis_model extends CI_Model {
	public function tampil_penulis()
	{
		return $this->db->get('penulis')->result();
	}

	public function simpan($data)
	{
		$this->db->insert('penulis',$data) or mysql_error();
	}

	public function edit($id)
	{
		return $this->db->get_where('penulis',array('id_pen'=>$id))->row();
	}

	public function update($data,$id)
	{
		$this->db->where('id_pen', $id);
		$this->db->update('penulis', $data); 
	}

	public function hapus($id)
	{
		$this->db->delete('penulis',array('id_pen'=>$id));
	}
	

}

/* End of file Penulis_model.php */
/* Location: ./application/models/Penulis_model.php */