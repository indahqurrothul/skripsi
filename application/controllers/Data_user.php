<?php

class Data_Stimulasi extends CI_Controller {

    function __construct()          
	{
		parent::__construct();
		$this->load->model('M_data_stimulasi');
		$this->load->library('form_validation');
    }
    
    public function index () {
        $data['title'] = "Relasi";
        $this->load->model('M_data_stimulasi');
        $data=[
            
            "data_stimulasi" => $this->M_data_stimulasi->get_data(),        
            "usia" => $this->M_data_stimulasi->get_usia(),        
            "autocode_stimulasi" => $this->M_data_stimulasi->autocode_stimulasi(),        
        ];
       
         //var_dump($data);
		 //die;
        $this->load->view('Admin/Tampil_data_stimulasi', $data);        
    }

    
}

?>