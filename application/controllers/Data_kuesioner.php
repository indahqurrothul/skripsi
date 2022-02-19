<?php

class Data_kuesioner extends CI_Controller {

    function __construct()          
	{
		parent::__construct();
		$this->load->model('M_data_kuesioner');
		$this->load->library('form_validation');
    }
    
    public function index () {
        $data['title'] = "Relasi";
        $this->load->model('M_data_kuesioner');
        $data=[
            
            "data_kuesioner" => $this->M_data_kuesioner->get_data(),      
            "autocode_kuesioner" => $this->M_data_kuesioner->autocode_kuesioner(),        
        ];
       
        //  var_dump($data);
		//  die;
        $this->load->view('Admin/Tampil_data_kuesioner', $data);        
    }

    public function tambah_data(){
        $data=[
            
            "data_kuesioner" => $this->M_data_kuesioner->get_data(),   
            "usia" => $this->M_data_kuesioner->get_usia(),
            "autocode_kuesioner" => $this->M_data_kuesioner->autocode_kuesioner(),        
        ];
        
        $this->load->view('Admin/Tambah_data_kuesioner', $data);
    }  

     // untuk menyimpan data yang di tambahkan
     public function simpan_data(){
        $model = $this->M_data_kuesioner;

		if ($model->simpan_data()) {
            //$this->session->set_flashdata('success', 'Berhasil Menambah Kuesioner');
            // ke controller
			redirect(site_url('Data_kuesioner'));
		}
    }
    
    //untuk tampil edit data kuesioner
    public function tampil_edit_data($id_kuesioner){
        $model = $this->M_data_kuesioner;
		$validation = $this->form_validation;
		$validation->set_rules($model->rules());

		if ($validation->run()) {
			$model->update_data_kuesioner();
			$this->session->set_flashdata('edit', 'Berhasil disimpan');
			redirect(site_url('Data_kuesioner'));
		}
		$data = [
			"usia" => $model->getById($id_kuesioner),
			"usia_saja" => $model->getById2(),
		];
		// var_dump($data);
		// die;
		$this->load->view("Admin/Edit_data_kuesioner", $data);
    }
    
    //untuk menghapus data
    public function hapus_data($id_kuesioner){
        if (!isset($id_kuesioner)) show_404();

		if ($this->M_data_kuesioner->hapus($id_kuesioner)) {
			$this->session->set_flashdata('hapus', 'Berhasil Menghapus Data');
			redirect(site_url('Data_kuesioner'));
		}
    }
}

?>