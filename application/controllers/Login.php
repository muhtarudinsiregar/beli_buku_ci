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
		$session = $this->session->userdata('isLogin');
		if ($session == true)
		{
			if ($this->session->userdata('lvl')=='admin') {
				redirect('buku','refresh');
			}else{
				redirect('anggota/dashboard','refresh');
			}
		}
		$data = array(
			'breadcrumb'=>'Login',
			'main'=>'login/login'
			);
		$this->load->view('layout/home/index', $data);
	}

	public function do_login()
	{
		$username = $this->input->post('email');
		$password = $this->input->post('password');
		$cek = $this->login_model->cek_user($username,sha1($password));
		var_dump($username);
		if (count($cek) == 1)
		{
			foreach ($cek as $cek)
			{
				$level = $cek['level'];
				$nama  = $cek['nama'];
			}
			
			
			$this->session->set_userdata(array(
				'isLogin'=>true,
				'username'=>$username,
				'lvl'=>$level,
				'nama'=>strstr($nama, ' ',true)
				));
			if ($level=='admin') {
				redirect('buku','refresh');
			}else{
				if ($this->session->userdata('redirect'))
				{
					redirect($this->session->userdata('redirect'));
				}
				else
				{
					redirect('/');
				}
			}


		}else
		{
			$data['gagal'] = 'Username Tidak ada!';
			redirect('login',$data);
			// var_dump($this->session->all_userdata());
		}


	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login','refresh');
	}

	public function daftar()
	{
		// ambil data form
		$data_input = array(
			'nama'=>$this->input->post('nama'),
			'email'=>$this->input->post('email'),
			'password'=>sha1($this->input->post('password')),
			'no_hp'=>$this->input->post('no_hp'),
			'level'=>'anggota'
			);
		
		// setting aturan untuk setiap form menggunakan cascading
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('nama', 'Nama', 'required|min_length[3]');
		$this->form_validation->set_rules('no_hp', 'Nomor HP', 'required|numeric|min_length[11]|max_length[12]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|matches[re_password]');
		$this->form_validation->set_rules('re_password', 'Ulangi Password', 'required|min_length[5]|matches[password]');

		// setting untuk pesan error
		$messages = array(
			'required' => 'Bagian  %s Harus diisi',
			'min_length' => '%s Panjang Minimal 11 karakter',
			'max_length' => '%s Panjang Maksimal 12 karakter',
			'valid_email' => 'Bagian %s Harus berisi email yang valid',
			'is_unique' => '%s Sudah ada yang menggunakan.',
			'matches' => 'Bagian %s tidak sama dengan bagian %s.',
			'numeric' => ' %s harus berupa angka.'
			);

		$this->form_validation->set_message($messages);
		// menjalankan validasi
		if ($this->form_validation->run())
		{
			$this->login_model->daftar($data_input);
			$this->session->set_flashdata('sukses', ' Mendaftar Sebagai Anggota');
			redirect('daftar');
		}else{
			$data = array(
				'breadcrumb'=>'Daftar',
				'main'=>'login/daftar'
				);
			$this->load->view('layout/home/index', $data);
		}
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */