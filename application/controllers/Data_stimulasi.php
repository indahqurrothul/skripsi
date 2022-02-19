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

    public function tambah_data(){
        $data=[
            "data_stimulasi" => $this->M_data_stimulasi->get_data(),        
            "usia" => $this->M_data_stimulasi->get_usia(),     
            "aspek_perkembangan" => $this->M_data_stimulasi->get_aspek_perkembangan(),     
            "autocode_stimulasi" => $this->M_data_stimulasi->autocode_stimulasi(),        
        ];
        // var_dump($data);
		// die;
        $this->load->view('Admin/Tambah_data_stimulasi', $data);
    }  
    
    // untuk menyimpan data yang di tambahkan
    public function simpan_data(){
        $model = $this->M_data_stimulasi;

		if ($model->simpan_data()) {
            //$this->session->set_flashdata('success', 'Berhasil Menambah Kuesioner');
            // ke controller
			redirect(site_url('Data_stimulasi'));
		}
    }

    //untuk tampil edit data kuesioner
    public function tampil_edit_data($id_stimulasi){
        $model = $this->M_data_stimulasi;
		$validation = $this->form_validation;
		$validation->set_rules($model->rules());

		if ($validation->run()) {
			$model->update_data_stimulasi();
			$this->session->set_flashdata('edit', 'Berhasil disimpan');
			redirect(site_url('Data_stimulasi'));
		}
		$data = [
			"usia" => $model->getById($id_stimulasi),
            "usia_saja" => $model->getById2(),
            "aspek_perkembangan" => $model->get_aspek_perkembangan(),
		];
		//var_dump($data);
		//die;
		$this->load->view("Admin/Edit_data_stimulasi", $data);
    }
    
    //untuk menghapus data
    public function hapus_data($id_stimulasi){
        if (!isset($id_stimulasi)) show_404();

		if ($this->M_data_stimulasi->hapus($id_stimulasi)) {
			$this->session->set_flashdata('hapus', 'Berhasil Menghapus Data');
			redirect(site_url('Data_stimulasi'));
		}
    }
}

?>