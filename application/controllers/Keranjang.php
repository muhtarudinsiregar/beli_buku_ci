<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Keranjang_model');
	}



	public function index()
	{
		// var_dump($this->session->all_userdata());
		if ($this->session->userdata('items')) {
			$data = $this->session->userdata('items');
			// var_dump($data);
			if (empty($data))
			{
				$data = array(
					'notif'=>"Keranjang Kosong",
					'main'=>'keranjang/keranjang',
					'breadcrumb'=>'Keranjang'
					);			
			}
			else
			{
				foreach ($data as $value)
				{
					$id[]=$value['item_id'];
					$jumlah[] = $value['item_quantity'];
				}
				$id_buku = implode(',',$id);
				// var_dump($id_buku);
				// memasukkan id buku di session ke dalam database untuk mencari buku in(1,2,3,..) 
				$data_book =$this->Keranjang_model->get_book_name($id_buku);
				// var_dump($data_book);
				// memasukkan data jml buku dari session ke array yg ditampilkan
				
				foreach ($data as $key=> $value) {
					$data_book[$key]->jumlah_buku = $data[$key]['item_quantity'];
					$data_book[$key]->total = $data[$key]['item_quantity'] * $data_book[$key]->harga;
				}
				
				$total = 0;
				$jml_buku = 0;
				foreach ($data_book as $key => $value) {
					$total = $total + $value->total;
					$jml_buku = $jml_buku + $value->jumlah_buku;
				}
				$data_buku = array(
					'total_harga' =>$total,
					'jumlah_buku' =>$jml_buku
				);
				// if ($total==0) {
				// 	$total = 0;
				// }
				
				
				$this->session->set_userdata( $data_buku );
				// var_dump($this->session->all_userdata());
				$data = [
				'main'=>'keranjang/keranjang',
				'breadcrumb'=>'Keranjang',
				'data_book'=>$data_book,
				'total'=>number_format($total,0,',','.')
				];

			}

		}else{

			$data = [
			'main'=>'keranjang/keranjang',
			'breadcrumb'=>'Keranjang',
			'total'=>0
			];
		}
		// var_dump($data);
		$this->load->view('layout/home/index',$data);
	}


	public function simpan()
	{
		if ($this->input->post('jml_bk'))
		{
			$detail_id = $this->input->post('id_bk');
			if ($this->session->userdata('items')) {

				$old_data =  $this->session->userdata('items');
				$data = [
				'item_id'=>$this->input->post('id_bk'),
				'item_quantity'=>$this->input->post('jml_bk')
				];
				array_push($old_data, $data);
				$this->session->set_userdata('items', $old_data);
				$array = $this->session->userdata('items');
				$total = array(); //move outside foreach loop because we don't want to reset it
				// var_dump($array);
				foreach ($array as $key => $value) {
					$id = $value['item_id'];
					$quantity = $value["item_quantity"];
					if (!isset($total[$id])) {
						$total[$id] = 0;
					}
					$data = $total[$id]	+=$quantity;
					// echo $data;
				}
				// //now convert our associative array from  array(actual_item_id => actual_item_quantity,....)
				//into array(array('item_id' => actual_item_id, 'item_quantity' => actual_item_quantity), ....)
				$items = array();

				foreach ($total as $item_id => $item_quantity) {
					$items[]= array(
						'item_id'=>$item_id,
						'item_quantity'=>$item_quantity,
						);
					// var_dump($items);
				}
				$this->session->set_userdata('items', $items);
				// var_dump($this->session->userdata('items'));
			}else{
				$data = array(
					'items' =>array(
						'0'  =>array(
							'item_id' => $this->input->post('id_bk'),
							'item_quantity' => $this->input->post('jml_bk')
							)));

				$this->session->set_userdata($data);
				// echo "suskses";
			}
			$this->session->set_flashdata('notif', 'Berhasil ');
			return Redirect('home/detail/'.$detail_id);
		}

		// $data = $this->session->userdata('items');
		// var_dump($this->session->all_userdata());
	}

	public function update($index)
	{
		$jumlah_buku = $this->input->post('jml_bk');

		$items = $this->session->userdata('items');
		$items[$index]['item_quantity'] = (int)$jumlah_buku;
		$this->session->set_userdata('items', $items);
		$this->session->set_flashdata('notif', 'Jumlah Produk telah diubah menjadi '.$jumlah_buku);
		return redirect('keranjang');
	}

	public function hapus($index)
	{
		var_dump($this->session->all_userdata());
		$items = $this->session->userdata('items');
		unset($items[$index]);

		$this->session->set_userdata('items',$items);

		// var_dump($this->session->userdata('items'));	
		$data = array(
			'notif'=>'Buku Berhasil Dihapus'
			);
		$this->session->set_flashdata('notif', 'Buku berhasil dihapus');
		return Redirect('keranjang',$data);
	}

	public function pesan()
	{
		$isLogin = $this->session->userdata('isLogin');
		if ($isLogin == false) {
			$this->session->set_userdata('redirect', 'keranjang/pesan');
			Redirect('login');
		}else{

			$data = [
			'main'=>'keranjang/keranjang_order',
			'breadcrumb'=>'Keranjang'
			];

			$this->load->view('layout/home/index', $data);
		}
	}
	public function konfirmasi()
	{	
		$unique =md5(rand(1,9999));
		$item = $this->session->userdata('items');
		$total = $this->session->userdata('total_harga');
		$jml_buku = $this->session->userdata('jumlah_buku');

		foreach ($item as $value) {
			$detail_item = array(
				'id_pmsn'=>$unique,
				'id_bk'=>$value['item_id'],
				'jumlah'=>$value['item_quantity']
				);
			$this->Keranjang_model->pemesanan_detail($detail_item);//insert detail pemesanan ke db satu persatu
		}
		$email = $this->session->userdata('username');
		$user = $this->Keranjang_model->get_id_user($email);//ambil id user
		// var_dump($item);
		// date_format(Y-MM-DD);
		date_default_timezone_set('Asia/Jakarta');
		$pemesanan = array(
			'id_pmsn'=>$unique,
			'id_usr'=>$user->id,
			'total_harga'=>$total,
			'jml_bk'=>$jml_buku,
			'tanggal_pemesanan'=>date('Y-m-d  h:i:s A')
			);
		$this->Keranjang_model->pemesanan($pemesanan);
		var_dump($pemesanan);
		echo "sukses";
		$data = array(
			'items'=>'items',
			'redirect'=>'redirect',
			'total_harga'=>'total_harga',
			'jumlah_buku'=>'jumlah_buku'
			);
		$this->session->unset_userdata($data);
		redirect('/');
		// $this->session->unset_userdata('redirect');
		// $this->session->unset_userdata('total_harga');
		// $this->session->unset_userdata('total_harga');
	}
}

/* End of file Keranjang.php */
/* Location: ./application/controllers/Keranjang.php */