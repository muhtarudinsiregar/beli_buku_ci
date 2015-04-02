<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        // $this->lang->load('error_indo');
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
           'main'=>'pendaftaran/daftar'
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
        error_reporting(0);
        // if ($keyword=== null) {
        //     redirect('home/cari/'.$this->input->post('keyword'));
        // }
        // $data['key'] = $keyword;

        $keyword = $this->input->get('search');

        if (empty($keyword)) {
            // echo "data tidak ada";
            $data = array(
                'query'=>$this->Home_model->tampil_all(),
                'main'=>'pencarian/index'
                );
            $this->load->view('template/home/index', $data);
        }
        else{
            $query1 =$this->Home_model->pencarian($keyword); //query utk pencarian
            // $data = array(
            //  'title' => 'Title',
            //  // 'content' => 'Sample Content'
            //  );

            // $content = $this->parser->parse('pencarian/test_parse',$data,TRUE);

            // $data1['content'] = $content;

            // $this->generate_view($data1['content']);

            // $data untuk parse ke html lwt lib parser
            $data_parse = array(
                'query'=>$query1
                );
            // data_parse untuk digabung ke view
            // $this->parser->parse('pencarian/test_parse',$data_parse);
            $content=$this->parser->parse('pencarian/test_parse',$data_parse,TRUE);
            // var_dump($content);
            $data['content'] = $content;
            // var_dump($data);
            $this->generate_view($data['content']);

        }
        
        

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
        var_dump($data);
        $this->parser->parse('pencarian/test_example_blog_post',$data);
    }



}//main


/* End of file Home.php */
/* Location: ./application/controllers/Home.php */