<?php

class Dashboard extends CI_Controller {
    function __construct()          
	{
		parent::__construct();
		$this->load->model('M_dashboard');
		$this->load->library('form_validation');
    }

    public function index(){
        $data = [
			"tabel" => $this->M_dashboard->tampil_data_user(),			
			"user" => $this->M_dashboard->data_user(),			
			"usia" => $this->M_dashboard->data_usia(),			
			"kuesioner" => $this->M_dashboard->data_kuesioner(),			
			"basis_pengetahuan" => $this->M_dashboard->basis_pengetahuan(),			
		];        
		// var_dump($data);
		// die;
        $this->load->view('Dashboard', $data);

    }
}

?>