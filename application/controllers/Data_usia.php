<?php

class Data_usia extends CI_Controller {

    function __construct()          
	{
		parent::__construct();
		$this->load->model('M_data_usia');
		$this->load->library('form_validation');
    }
    
    public function index () {
        $this->load->model('M_data_usia');
        $data=[
        "data_usia" => $this->M_data_usia->get_data('tbl_data_usia')->result(),        
        "autocode_usia" => $this->M_data_usia->autocode_usia(),        
        ];
    // var_dump($data);
    // die;
        $this->load->view('Admin/Tampil_data_usia', $data);
    }

    public function tambah_data(){
        $data=[
            "data_usia" => $this->M_data_usia->get_data('tbl_data_usia')->result(),        
            "autocode_usia" => $this->M_data_usia->autocode_usia(),        
            ];
        $this->load->view('Admin/Tambah_data_usia', $data);
    }
    
    // untuk menyimpan data yang di tambahkan
    public function simpan_data(){
        $model = $this->M_data_usia;

		if ($model->simpan_data()) {
            $this->session->set_flashdata('success', 'Berhasil Menambah Usia');
            // ke controller
			redirect(site_url('Data_usia'));
		}
    }

    //untuk tampil edit data usia
    public function tampil_edit_data($id_usia){
        $model = $this->M_data_usia;
		$validation = $this->form_validation;
		$validation->set_rules($model->rules());

		if ($validation->run()) {
			$model->update_data_usia();
			$this->session->set_flashdata('edit', 'Berhasil disimpan');
			redirect(site_url('Data_usia'));
		}
		$data = [
			"usia" => $model->getById($id_usia),
		];
		// var_dump($data);
		// die;
		$this->load->view("Admin/Edit_data_usia", $data);
    }

    //untuk menghapus data
    public function hapus_data($id_usia){
        if (!isset($id_usia)) show_404();

		if ($this->M_data_usia->hapus($id_usia)) {
			$this->session->set_flashdata('hapus', 'Berhasil Menghapus Data');
			redirect(site_url('Data_usia'));
		}
    }
}

?>