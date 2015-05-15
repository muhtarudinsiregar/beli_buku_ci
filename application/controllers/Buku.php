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
			// $session = $this->session->userdata('session_id');
			// if (!$session =="0") {
			// 	redirect('buku/tambah');
			// }

			// var_dump($session);
			$data = [
			'breadcrumb'=>'List Buku',
			'buku'=>$this->Buku_model->tampil_buku(),
			'no'=>0,
			'sidebar'=>'layout/home/sidebar_admin',
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
				'sidebar'=>'layout/home/sidebar_admin',
				'kategori'=>$this->Buku_model->tampil_kategori(),
				'penulis'=>$this->Buku_model->tampil_penulis()
				);
			
			$this->load->view('layout/home/index',$data);
		}

		public function simpan()
		{
			$config = $this->upload->initialize(array(
				'upload_path' => './img/',
				'allowed_types' => 'png|jpg|gif|jpeg',
				'max_size' => '5000',
				'max_width' => '3000',
				'max_height' => '3000'
				)); 
			
			$this->load->library('upload',$config);

			// var_dump($config);
			if (!$this->upload->do_upload())
			{
				$error = array(
					'error' => $this->upload->display_errors(),
					'main'=>'buku/tambah',
					'breadcrumb'=>'Tambah Buku'
					);
				echo $error['error'];
			}
			else
			{
				$upload_data =$this->upload->data();
				$data = array(
					'judul'=>$this->input->post('judul'),
					'id_ktgr'=>$this->input->post('kategori'),
					'id_pen'=>$this->input->post('penulis'),
					'harga'=>$this->input->post('harga'),
					'tahun'=>$this->input->post('tahun'),
					'deskripsi'=>$this->input->post('deskripsi'),
					'gambar'=>$upload_data['raw_name'].$upload_data['file_ext']
					);
				// var_dump($data['gambar']);
				$this->Buku_model->tambah($data);
				redirect('buku/tambah');
			}
		}

		// public function proses_tambah()
		// {
		// 	$config = $this->upload->initialize(array(
		// 		'upload_path' => './img/',
		// 		'allowed_types' => 'png|jpg|gif|jpeg',
		// 		'max_size' => '5000',
		// 		'max_width' => '3000',
		// 		'max_height' => '3000'
		// 		)); 

		// 	// $this->load->library('upload',$config);

		// 	if ($this->upload->do_upload()){
		// 		$upload_data =$this->upload->data();
		// 		$this->image_lib->initialize(array(
		// 			'image_library' => 'gd2',
		// 			'source_image' => './img/'. $upload_data['file_name'],
		// 			'overwrite'=>true,
		// 			'maintain_ratio' => false,
		// 			'create_thumb' => true,
		// 			'quality' => '100%',
		// 			'width' => 169,
		// 			'height' => 220
		// 			));
		// 		$data_image = array(
		// 			'judul'=>$this->input->post('judul'),
		// 			'deskripsi'=>$this->input->post('deskripsi'),
		// 			'harga'=>$this->input->post('harga'),	
		// 			'penerbit'=>$this->input->post('penerbit'),
		// 			'bahasa'=>$this->input->post('bahasa'),
		// 			'stok'=>$this->input->post('stok'),
		// 			'penulis'=>$this->input->post('penulis'),
		// 			'gambar'=>$upload_data['raw_name'].$upload_data['file_ext'],
		// 			'thumbnail'=>$upload_data['raw_name'].'_thumb'.$upload_data['file_ext']
		// 			);

		// 			// var_dump($upload_data);
		// 		$data = $this->Buku_model->tambah($data_image);

		// 		if (!$this->image_lib->resize()) {
		// 			$data['error'] = $this->image_lib->display_errors();
		// 		}
		// 		else{
		// 			$data['error'] = $this->image_lib->display_errors();
		// 			$error = array('error' => $this->upload->display_errors());
		// 		// echo "error";
		// 			echo $error['error'];

		// 		}
		// 	}// penutup do upload 
		// } 


		public function edit($id)
		{
			$data = [
			'data'=> $this->Buku_model->edit($id),
			'judul'=> "Edit Buku",
			'main' =>"buku/edit",
			'sidebar'=>'layout/home/sidebar_admin',
			'breadcrumb' =>"Edit Buku",
			'kategori'=>$this->Buku_model->tampil_kategori(),
			'penulis'=>$this->Buku_model->tampil_penulis()
			];

			// $array_baru = array($data['edit']);
			$this->load->view('layout/home/index',$data);
		}
		public function update($id)
		{
			$config = $this->upload->initialize(array(
				'upload_path' => './img/',
				'allowed_types' => 'png|jpg|gif|jpeg',
				'max_size' => '5000',
				'max_width' => '3000',
				'max_height' => '3000'
				)); 
			
			$this->load->library('upload',$config);
			$gambar = $this->Buku_model->edit($id);
			if (!$this->upload->do_upload()) {
				$data = array(
						'judul'=>$this->input->post('judul'),
						'id_ktgr'=>$this->input->post('kategori'),
						'id_pen'=>$this->input->post('penulis'),
						'harga'=>$this->input->post('harga'),
						'tahun'=>$this->input->post('tahun'),
						'deskripsi'=>$this->input->post('deskripsi')
						);
					$this->Buku_model->update($data,$id);
					return redirect('buku/edit/'.$gambar->id_bk);
			}else{

				$gambar = $this->Buku_model->edit($id);
				// var_dump($gambar->gambar);
				unlink('img/'.$gambar->gambar);
				$upload_data =$this->upload->data();
				$data_gambar =$upload_data['raw_name'].$upload_data['file_ext'];
				if (!empty($data_gambar)) {
					$data = array(
						'judul'=>$this->input->post('judul'),
						'id_ktgr'=>$this->input->post('kategori'),
						'id_pen'=>$this->input->post('penulis'),
						'harga'=>$this->input->post('harga'),
						'tahun'=>$this->input->post('tahun'),
						'deskripsi'=>$this->input->post('deskripsi'),
						'gambar'=>$upload_data['raw_name'].$upload_data['file_ext']
						);
					$this->Buku_model->update($data,$id);

					return redirect('buku/edit/'.$gambar->id_bk);
				}
			}

			// // var_dump($config);
			// if (!$this->upload->do_upload())
			// {
			// 	$error = array(
			// 		'error' => $this->upload->display_errors(),
			// 		'main'=>'buku/tambah',
			// 		'breadcrumb'=>'Tambah Buku'
			// 		);
			// 	echo $error['error'];
			// }
			// else
			// {
			// 	$upload_data =$this->upload->data();
			// 	$data = array(
			// 		'judul'=>$this->input->post('judul'),
			// 		'id_ktgr'=>$this->input->post('kategori'),
			// 		'id_pen'=>$this->input->post('penulis'),
			// 		'harga'=>$this->input->post('harga'),
			// 		'tahun'=>$this->input->post('tahun'),
			// 		'deskripsi'=>$this->input->post('deskripsi'),
			// 		'gambar'=>$upload_data['raw_name'].$upload_data['file_ext']
			// 		);
			// 	// var_dump($data['gambar']);
			// 	$this->Buku_model->tambah($data);
			// 	redirect('buku/tambah');
			// }
		}

		public function hapus($id)
		{	$gambar = $this->Buku_model->get_gambar($id);
			unlink("img/" . $gambar->gambar);
			$this->Buku_model->hapus($id);

			$this->session->set_flashdata('notifikasi', '<div class="alert alert-success alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Berhasil </strong>Menghapus Artikel
			</div>');
			redirect('buku');
		}
	}
	?>