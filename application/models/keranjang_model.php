<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang_model extends CI_Model {

	public function get_book_name($id)
	{
		
		$query = $this->db->query('select id_bk,judul,gambar,harga from buku where id_bk in('.$id.')');
		
		return $query->result();
	}

	public function get_id_user($email)
	{
		$query = $this->db->get_where('users', array('email' => $email));
		return $query->row();
	}

	public function pemesanan_detail($detail_item)
	{
		$this->db->insert('pemesanan_detail', $detail_item);
	}

	public function pemesanan($data_pemesanan)
	{
		$this->db->insert('pemesanan', $data_pemesanan);
	}
	

}

/* End of file keranjang_model.php */
/* Location: ./application/models/keranjang_model.php */