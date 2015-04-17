<?php 
	/**
	* 
	*/
	class Buku_model extends CI_Model
	{


		public function tampil_buku()
		{
			$this->db->select('id_bk,judul,harga,gambar,nama');
			$this->db->from('buku AS b');
			$this->db->join('penulis AS p','p.id_pen=b.id_pen');
			$query = $this->db->get();
			return $query->result();
		}
		
		public function tambah($data)
		{
			$this->db->insert('buku',$data) or mysql_error();
		}

		public function edit($id)
		{
			return $this->db->get_where('buku',array('id_bk'=>$id))->row();
		}

		public function update($data,$id)
		{
			$this->db->where('id_bk', $id);
			$this->db->update('buku', $data); 
		}

		public function hapus($id)
		{
			$this->db->delete('buku',array('id_bk'=>$id));
		}

		public function tampil_kategori()
		{
			return $this->db->get('kategori')->result();
		}
		public function tampil_penulis()
		{
			return $this->db->get('penulis')->result();
		}

		public function get_gambar($id)
		{
			$this->db->select('gambar');
			$this->db->where('id_bk',$id);
			$query = $this->db->get('buku');
			return $query->row();
		}

	}

	?>
