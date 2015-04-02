<?php 
	if (!defined('BASEPATH')) exit('No direct script access allowed');
	
	class Pendaftaran extends CI_Controller {
	
	    function __construct() {
	        parent::__construct();
	        $this->load->model('Pendaftaran_model');
	    }
	
	    function index() {
	    	
	    	$this->load->view('pendaftaran/index.php',$data);    
	    }


	    public function proses_tambah()
	    {
	    	$data = array(
				'nama'=>$this->input->post('nama'),
				'email'=>$this->input->post('email'),
				'password'=>$this->input->post('password'),	
				'no_hp'=>$this->input->post('no_hp')
				);
	    	$this->Pendaftaran_model->tambah($data);

	    }
	}
	        
 ?>