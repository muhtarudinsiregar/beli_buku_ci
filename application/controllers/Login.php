<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		$data = array(
			'breadcrumb'=>'Login',
			'main'=>'login/login'
			);
		$this->load->view('layout/home/index', $data);
	}

	public function daftar()
	{
		// $this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');

		

		// $data_input =$this->input->post();
		$data_input = array(
				'nama'=>$this->input->post('nama'),
				'email'=>$this->input->post('email'),
				'password'=>$this->input->post('password'),
				'no_hp'=>$this->input->post('no_hp'),
				'level'=>'anggota'
			);
		// setting aturan untuk setiap form
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required|min_length[3]|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[5]|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|matches[re_password]|xss_clean');
		$this->form_validation->set_rules('re_password', 'Ulangi Password', 'trim|required|min_length[5]|xss_clean');
		$this->form_validation->set_rules('no_hp', 'No HP', 'trim|required|min_length[11]|max_length[12]|xss_clean');

		// setting pesan error untuk setiap aturan
		$this->form_validation->set_message('required', ' %s Tidak Boleh Kosong');

		if ($this->form_validation->run())
		{
			$this->login_model->daftar($data_input);
			$this->session->set_flashdata('sukses', ' Mendaftar Sebagai Anggota');
			 redirect('daftar');
		}else{
			$data = array(
			'breadcrumb'=>'Daftar',
			'main'=>'login/daftar',
			'data_input' =>$this->input->post()
			);
			// var_dump($data_input);
		$this->load->view('layout/home/index', $data);
	
		}
		
		
		
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */