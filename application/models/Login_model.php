<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {


	public function daftar($data)
	{
		$this->db->insert('users', $data);
	}
	

}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */