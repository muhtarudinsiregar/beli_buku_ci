<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function tambah($data)
	{
		$this->db->insert('anggota',$data);
	}

	public function cari($keyword)
	{

		$this->db->select('id_bk,judul,harga,gambar,nama');
		$this->db->from('buku AS b');
		$this->db->join('penulis AS p','p.id_pen=b.id_pen');
		$this->db->like("b.judul",$keyword);
		$this->db->or_like("p.nama",$keyword);
		$query = $this->db->get();
		return $query->result();

		
		// menampilkan semua kolom
		// $this->db->get('buku') @param nama tabel

		// menampilkan beberapa kolom saja
		// $this->db->select('judul,harga') @param nama kolom

		// menampilkan data menggunakan where
		// $this->db->where('') 
		// select id_bk,judul,harga,p.nama from penulis p join buku b on(b.id_pen=p.id_pen) where judul like "%radit%" or p.nama like "%radit%"
		// $this->db->select('*');
		// $this->db->from('buku');
		// $this->db->where('id_bk',1);
		// $query = $this->db->get();


		// $query = $this->db->get("buku");
		// var_dump($query->result());
	}

	public function tampil_all()
	{
		$this->db->select('id_bk,judul,harga,gambar,nama');
		$this->db->from('buku AS b');
		$this->db->join('penulis AS p','p.id_pen = b.id_pen');
		$query = $this->db->get();
		return $query->result();

	}

	public function lihat($id)
	{
		$this->select('id_bk,judul,harga,gambar,p.nama,k.nama');
		$this->from('penulis p');
		$this->db->join('buku b','b.id_pen=p.id_pen');
		$this->db->join('kategori k','k.id_ktrg=b.id_ktrg');
		$query = $this->db->get();
		

	}


}
?>