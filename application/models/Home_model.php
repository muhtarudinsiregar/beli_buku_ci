<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function tambah($data)
	{
		$this->db->insert('anggota',$data);
	}

	public function pencarian()
	{
		$keyword = $this->input->post("search");
		$this->db->like("judul",$keyword);
		$this->db->or_like("penulis",$keyword);
		$query = $this->db->get("buku");
		return $query->result();
	}


}
?>