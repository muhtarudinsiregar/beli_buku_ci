<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {


	public function daftar($data)
	{
		$this->db->insert('users', $data);
	}

	public function cek_user($username="",$password="")
	{
		$query =$this->db->get_where('users',array('email'=>$username,'password'=>$password));
		return $query->result_array(); 
	}

	public function get_user($username)
	{
		$query = $this->db->get_where('users', array('username'=>$username));
		return $query->result_array();
		if ($query) {
			return $query[0];
		}
	}


	

}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */