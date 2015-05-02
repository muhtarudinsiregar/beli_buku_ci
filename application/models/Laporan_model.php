<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_model extends CI_Model {

	public function export()
	{
		$query = $this->db->query('SELECT DATE_FORMAT(tanggal_transaksi,"%M %Y") AS tanggal,sum(total_harga) as total 
			FROM keranjang 
			GROUP BY YEAR(tanggal_transaksi), MONTH(tanggal_transaksi)');
		return $query->result();
	}

	public function total()
		{
			$this->db->select_sum('total_harga');
			$query = $this->db->get('keranjang');
			return $query->row();
		}	

}

/* End of file Laporan_model.php */
/* Location: ./application/models/Laporan_model.php */