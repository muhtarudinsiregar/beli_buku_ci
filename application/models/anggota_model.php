<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota_model extends CI_Model {

	public function get_pemesanan_anggota($email)
	{
		$this->db->select('id_pmsn,id_usr,total_harga,tanggal_pemesanan');
		$this->db->from('pemesanan as p');
		$this->db->join('users', 'p.id_usr = users.id');
		$this->db->where('email', $email);
		$this->db->order_by('tanggal_pemesanan', 'asc');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_user($email)
	{
		$this->db->select('id');
		$this->db->where('email', $email);
		$query = $this->db->get('users	');
		return $query->row();
	}

	public function detail_pemesanan($id_pemesanan)
	{
		$this->db->select('b.gambar,b.id_bk,judul,b.harga,pd.jumlah,p.total_harga');
		$this->db->from('pemesanan as p');
		$this->db->join('pemesanan_detail as pd', 'p.id_pmsn = pd.id_pmsn', 'left');
		$this->db->join('buku as b', 'pd.id_bk = b.id_bk', 'left');
		$this->db->where('p.id_pmsn', $id_pemesanan);
		$query = $this->db->get();
		return $query->result();

		// $this->db->query(
		// 	'SELECT b.id_bk,b.judul,pd.jumlah,p.jumlah_total
		// 	 	from pemesanan as p
		// 	 	join()
		// 	'
		// 	);
	}

}

/* End of file anggota_model.php */
/* Location: ./application/models/anggota_model.php */