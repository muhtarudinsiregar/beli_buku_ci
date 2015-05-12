<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang_model extends CI_Model {

	public function get_book_name($id)
	{
		
		$query = $this->db->query('select id_bk,judul,gambar,harga from buku where id_bk in('.$id.')');
		
		return $query->result();
	}
	

}

/* End of file keranjang_model.php */
/* Location: ./application/models/keranjang_model.php */