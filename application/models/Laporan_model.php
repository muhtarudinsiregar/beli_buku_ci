<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_model extends CI_Model {

	public function export()
	{
		$query = $this->db->query('SELECT DATE_FORMAT(tanggal_pemesanan,"%M %Y") AS tanggal,sum(total_harga) as total 
			FROM pemesanan 
			GROUP BY YEAR(tanggal_pemesanan), MONTH(tanggal_pemesanan)');
		return $query->result();
	}

	public function total()
		{
			$this->db->select_sum('total_harga');
			$query = $this->db->get('pemesanan');
			return $query->row();
		}	

}

/* End of file Laporan_model.php */
/* Location: ./application/models/Laporan_model.php */