<?php 
	/**
	* 
	*/
	class Buku_model extends CI_Model
	{


		public function tampil_buku()
		{
			return $this->db->get('buku')->result();
		}
		
		public function tambah($data)
		{
			$this->db->insert('buku',$data) or mysql_error();
		}

		public function edit($id)
		{
			return $this->db->get_where('buku',array('id'=>$id))->row();
		}

		public function update($data,$id)
		{
			$this->db->where('id', $id);
			$this->db->update('buku', $data); 
		}

		public function hapus($id)
		{
			$this->db->delete('buku',array('id'=>$id));
		}

	}

	?>
