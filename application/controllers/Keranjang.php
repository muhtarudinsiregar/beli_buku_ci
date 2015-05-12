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
				// memasukkan id buku di session ke dalam database untuk mencari buku 
				$data_book =$this->Keranjang_model->get_book_name($id_buku);
				// var_dump($data_book);
				// memasukkan data jml buku dari session ke array yg ditampilkan

				foreach ($data as $key=> $value) {
					$data_book[$key]->jumlah_buku = $data[$key]['item_quantity'];
					$data_book[$key]->total = $data[$key]['item_quantity'] * $data_book[$key]->harga;
					
				}
				// var_dump($data[0]);
				$data = [
				'main'=>'keranjang/keranjang',
				'breadcrumb'=>'Keranjang',
				'data_book'=>$data_book
				];

			}

		}else{

			$data = [
			'main'=>'keranjang/keranjang',
			'breadcrumb'=>'Keranjang'
			];
		}
		// var_dump($data);
		$this->load->view('layout/home/index',$data);
	}


	public function simpan()
	{
		if ($this->input->post('jml_bk'))
		{
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
			$this->session->set_flashdata('notif', 'Berhasi');
			return Redirect('/');
		}

		// $data = $this->session->userdata('items');
		// var_dump($this->session->all_userdata());
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
		return Redirect('keranjang',$data);
	}
}

/* End of file Keranjang.php */
/* Location: ./application/controllers/Keranjang.php */