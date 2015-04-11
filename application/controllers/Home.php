<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Home_model');
    }

    function index() {

    }
// ------------------------------------------------------------------------
    /**
     *
     */
    public function pendaftaran()
    {
    	$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');
    	$data = array(
           'main'=>'pendaftaran/daftar',
           'breadcrumb'=>'Pendaftaran'
           );

    	$this->form_validation->set_rules('nama', 'Nama', 'trim|required|min_length[3]|xss_clean');
    	$this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[5]|max_length[12]|xss_clean');
    	$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|matches[re_password]|xss_clean');
    	$this->form_validation->set_rules('re_password', 'Ulangi Password', 'trim|required|min_length[5]|xss_clean');
    	$this->form_validation->set_rules('nohp', 'No HP', 'trim|required|min_length[11]|max_length[12]|xss_clean');

    	if ($this->form_validation->run()== FALSE)
    	{
    		// echo $this->input->post('nama');
            //echo validation_errors(); 
    		$this->load->view('template/home/index', $data);
    	}else
    	{
    		$this->proses();
    	}
    }
// ------------------------------------------------------------------------
    public function proses()
    {

        $nama =$this->input->post('nama');
        

        var_dump($nama);
    }


    // ------------------------------------------------------------------------


    public function cari()
    {
      
        $keyword = $this->input->get('search');

        if (empty($keyword)) {
            //ketika $keyword kosong maka akan tampil semua

            $data = array(
                'query'=>$this->Home_model->tampil_all(),
                'main'=>'pencarian/index',
                'breadcrumb'=>'Pencarian'
                );
            // $this->load->view('template/home/index', $data);
        }
        else{

            $data = array(
                'query'=>$this->Home_model->cari($keyword),
                'main'=>'pencarian/index',
                'breadcrumb'=>'Pencarian'
                );
        }
        
        

            $this->load->view('template/home/index', $data);
    }// end of function cari

    public function generate_view($data='')
    {
        $header = $this->parser->parse('template/parser/header',array(),TRUE);
        $footer = $this->parser->parse('template/parser/footer',array(),TRUE);
        $content = $data;
       
        $data = [
        'header'=>$header,
        'content'=>$content,
        'footer'=>$footer
        ];
        // var_dump($data);
        $this->parser->parse('pencarian/test_example_blog_post',$data);
    }



}//main


/* End of file Home.php */
/* Location: ./application/controllers/Home.php */