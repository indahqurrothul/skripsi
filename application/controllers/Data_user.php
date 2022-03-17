<?php

class Data_user extends CI_Controller {

    function __construct()          
    {
      parent::__construct();
      $this->load->model('M_data_stimulasi');
      $this->load->model('M_data_kuesioner');
      $this->load->model('M_data_user');
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

public function data_user() {

    $data=[
        "data_user" => $this->M_data_user->Get_data_user(),     
    ];


    $this->load->view('Admin/Tampil_data_user2', $data);        
}

public function detail_data_user() {

    $id_user = $this->uri->segment('3');
    $id_usia = $this->uri->segment('4');
   
    $data=[        
        "data_gerakkasar" => $this->M_data_kuesioner->get_data_gerakkasar($id_user),  
        "data_gerakhalus" => $this->M_data_kuesioner->get_data_gerakhalus($id_user),  
        "data_bicara_bahasa" => $this->M_data_kuesioner->get_data_bicara_bahasa($id_user),  
        "data_sosialisasi_kemandirian" => $this->M_data_kuesioner->get_data_sosialisasi_kemandirian($id_user),  
        "stimulasi_gerakkasar" => $this->M_data_kuesioner->get_data_stimulasi_gerakkasar($id_usia),  
        "stimulasi_gerakhalus" => $this->M_data_kuesioner->get_data_stimulasi_gerakhalus($id_usia),  
        "stimulasi_bicara_bahasa" => $this->M_data_kuesioner->get_data_stimulasi_bicara_bahasa($id_usia),  
        "stimulasi_sosialisasi_kemandirian" => $this->M_data_kuesioner->get_data_stimulasi_sosialisasi_kemandirian($id_usia),  
    ];

    $this->load->view('Admin/Tampil_detail_data_user', $data);        
}




}

?>