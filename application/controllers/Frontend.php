<?php

class Frontend extends CI_Controller {

    function __construct()          
	{
		parent::__construct();
		$this->load->model('M_data_user');
		$this->load->library('form_validation');
    }
    
    public function index () {
        // $this->load->model('M_data_usia');
        // $data['data_usia']= $this->M_data_usia->get_data('tbl_data_usia')->result();

        $this->load->view('Frontend/index');
    }
    
    public function infoperkembangan () {
        // $this->load->model('M_data_usia');
        // $data['data_usia']= $this->M_data_usia->get_data('tbl_data_usia')->result();

        $this->load->view('Frontend/infoperkembangan');
    }
//form isi data bayi
    public function konsultasi1 () {
        $this->load->model('M_data_usia');
        $data=[
            
            "data_usia" => $this->M_data_usia->get_data_usia()->result(),  
            "autocode_user" => $this->M_data_user->autocode_user(),        
        ];
        
        // var_dump($data);
        // die;
        $this->load->view('Frontend/form_databayi', $data);        
    }
    
   //form isi pertanyaan
   public function konsultasi2 () {
    // $this->load->model('M_data_usia');
    // $data['data_usia']= $this->M_data_usia->get_data('tbl_data_usia')->result();
    $this->load->model('M_data_kuesioner');
    $data=[
        
        "data_kuesioner" => $this->M_data_kuesioner->get_data(),  
        "autocode_kuesioner" => $this->M_data_kuesioner->autocode_kuesioner(),        
    ];
    
    
    $this->load->view('Frontend/form_pertanyaan', $data);
    }
    
    //tips
    public function tips () {
        // $this->load->model('M_data_usia');
        // $data['data_usia']= $this->M_data_usia->get_data('tbl_data_usia')->result();
    
        $this->load->view('Frontend/tips');
    }
    
    //form hasil
    public function hasilkonsultasi () {
        // $this->load->model('M_data_usia');
        // $data['data_usia']= $this->M_data_usia->get_data('tbl_data_usia')->result();
    
        $this->load->view('Frontend/form_hasilperkembangan');
    }

    //form tambah data user
    public function simpan_datauser(){
        $model = $this->M_data_user;

		if ($model->simpan_data()) {
            $this->session->set_flashdata('success', 'Berhasil Menambah User');
           
            $this->load->model('M_data_kuesioner');
            $data=[
        
                "data_kuesioner" => $this->M_data_kuesioner->get_data_frontend($_POST["Usia"]),  
                "autocode_kuesioner" => $this->M_data_kuesioner->autocode_kuesioner(),        
            ];
            // var_dump($data);
            // die;
            $this->load->view('Frontend/form_pertanyaan', $data);
		}
    }
}
?>