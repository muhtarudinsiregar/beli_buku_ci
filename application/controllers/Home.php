<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Home_model');
       // $this->home = new Home_model();

        $data['kategori'] = $this->Home_model->kategori();
        $this->load->vars($data);
    }

    function index()
    {
        $data = array(
            'data'=>$this->Home_model->tampil_buku(),
            'main'=>'home/index',
            'breadcrumb'=>'',
            'kategori'=>$this->Home_model->kategori(),
            ); 
        $this->load->view('layout/home/index', $data);
    }
// ------------------------------------------------------------------------
    /**
     *
     */


    // ------------------------------------------------------------------------


public function cari()
{
    $keyword = $this->input->get('search');
    $data = array(
        'query'=>$this->Home_model->cari($keyword),
            // 'kategori'=>$this->Home_model->kategori(),
        'main'=>'home/pencarian',
        'breadcrumb'=>'Pencarian'
        );
        // var_dump($data['query']);
    $this->load->view('layout/home/index', $data);
}

public function detail($id_bk)
{
    $data = [
    'breadcrumb'=>'Buku',
    'data'=>$this->Home_model->detail_buku($id_bk),
    'main'=>'home/detail_buku'
    ];
        // var_dump($data['data']);
    $this->load->view('layout/home/index', $data);
}

public function kategori_detail($id)
{
    $data = array(
        'main'=>'home/kategori_detail',
        'data'=>$this->Home_model->kategori_detail($id),
        'breadcrumb'=>'Kategori'
        );
    $this->load->view('layout/home/index', $data);
}



}//main


/* End of file Home.php */
/* Location: ./application/controllers/Home.php */