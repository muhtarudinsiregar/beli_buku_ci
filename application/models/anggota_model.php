<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota_model extends CI_Model {

	public function get_pemesanan_anggota($email)
	{
		$this->db->select('id_pmsn,id_usr,total_harga,tanggal_pemesanan');
		$this->db->from('pemesanan as p');
		$this->db->join('users', 'p.id_usr = users.id');
		$this->db->where('email', $email);
		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file anggota_model.php */
/* Location: ./application/models/anggota_model.php */