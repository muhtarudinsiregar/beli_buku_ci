<?php 
	/**
	* 
	*/
	class Buku extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Buku_model');
			// $this->load->model('Kategori_model');
		}


		public function index()
		{ 
			$data = [
			'breadcrumb'=>'List Buku',
			'buku'=>$this->Buku_model->tampil_buku(),
			'no'=>0,
			'main'=>'buku/list'

			];
			$this->load->view('layout/home/index', $data);
			// $this->load->view('template/admin/main.php');
		}

		public function tambah()
		{
			// $this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');
			// $data['content'] = "artikel/tambah_artikel";
			// $data['judul'] = "Tambah Artikel";


			// $this->form_validation->set_rules('judul', 'Judul', 'required');
			// $this->form_validation->set_rules('isi_artikel', 'Isi Artikel', 'required');

			$data = array(
				'main' =>'buku/tambah',
				'breadcrumb'=>"Tambah Buku",
				'kategori'=>$this->Buku_model->tampil_kategori(),
				'penulis'=>$this->Buku_model->tampil_penulis()
			);
			
			$this->load->view('layout/home/index',$data);

			// if ($this->form_validation->run() == FALSE){
			// 	$this->load->view('template/admin/index',$data);
			//  // echo validation_errors(); 
			// }else{
			// 	$this->proses_tambah();
			// }
		}

		public function proses_tambah()
		{
			$config = $this->upload->initialize(array(
				'upload_path' => './img/',
				'allowed_types' => 'png|jpg|gif|jpeg',
				'max_size' => '5000',
				'max_width' => '3000',
				'max_height' => '3000'
				)); 
			
			$this->load->library('upload',$config);
			
			if ($this->upload->do_upload()){
				$upload_data =$this->upload->data();
				$this->image_lib->initialize(array(
					'image_library' => 'gd2',
					'source_image' => './img/'. $upload_data['file_name'],
					'overwrite'=>true,
					'maintain_ratio' => false,
					'create_thumb' => true,
					'quality' => '100%',
					'width' => 169,
					'height' => 220
					));
				$data_image = array(
					'judul'=>$this->input->post('judul'),
					'deskripsi'=>$this->input->post('deskripsi'),
					'harga'=>$this->input->post('harga'),	
					'penerbit'=>$this->input->post('penerbit'),
					'bahasa'=>$this->input->post('bahasa'),
					'stok'=>$this->input->post('stok'),
					'penulis'=>$this->input->post('penulis'),
					'gambar'=>$upload_data['raw_name'].$upload_data['file_ext'],
					'thumbnail'=>$upload_data['raw_name'].'_thumb'.$upload_data['file_ext']
					);

					// var_dump($upload_data);
				$data = $this->Buku_model->tambah($data_image);

				if (!$this->image_lib->resize()) {
					$data['error'] = $this->image_lib->display_errors();
				}
				else{
					$data['error'] = $this->image_lib->display_errors();
					$error = array('error' => $this->upload->display_errors());
				// echo "error";
					echo $error['error'];

				}
			}// penutup do upload 
		} 


		public function edit($id)
		{
			$data = [
				'data'=> $this->Buku_model->edit($id),
				'judul'=> "Edit Artikel",
				'main' =>"buku/edit_buku"
			];

			// $array_baru = array($data['edit']);
			$this->load->view('template/admin/index',$data);
		}
		public function update($id)
		{

		}

		public function hapus($id)
		{
			$this->Buku_model->hapus($id);
			$this->session->set_flashdata('notifikasi', '<div class="alert alert-success alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Berhasil </strong>Menghapus Artikel
			</div>');
			redirect('buku');
		}
	}
	?>