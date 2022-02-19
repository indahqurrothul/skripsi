<?php

class Basis_pengetahuan extends CI_Controller {

    function __construct()          
	{
		parent::__construct();
		$this->load->model('M_basis_pengetahuan');
		$this->load->library('form_validation');
    }

    public function index () {
        $this->load->model('M_basis_pengetahuan');
        $data=[
            
            "basis_pengetahuan" => $this->M_basis_pengetahuan->get_data('tbl_data_pengetahuan')->result(),    
            "autocode_pengetahuan" => $this->M_basis_pengetahuan->autocode_pengetahuan(),        
        ];
        
        //var_dump($data);
		//die;
        $this->load->view('Admin/Tampil_basis_pengetahuan', $data);
    }

    public function tambah_data(){
        $data=[
            
            "basis_pengetahuan" => $this->M_basis_pengetahuan->get_data('tbl_data_pengetahuan')->result(),    
            "autocode_pengetahuan" => $this->M_basis_pengetahuan->autocode_pengetahuan(),        
        ];
        
        $this->load->view('Admin/Tambah_basis_pengetahuan', $data);
    }
    
    // untuk menyimpan data yang di tambahkan
    public function simpan_data(){
        $model = $this->M_basis_pengetahuan;

		if ($model->simpan_data()) {
            $this->session->set_flashdata('success', 'Berhasil Menambah Data Pengetahuan');
            // ke controller
			redirect(site_url('Basis_pengetahuan'));
		}
    }

    //untuk tampil edit basis pengetahuan
    public function tampil_edit_data($id_pengetahuan){
        $model = $this->M_basis_pengetahuan;
		$validation = $this->form_validation;
		$validation->set_rules($model->rules());

		if ($validation->run()) {
			$model->update_basis_pengetahuan();
			$this->session->set_flashdata('edit', 'Berhasil disimpan');
			redirect(site_url('Basis_pengetahuan'));
		}
		$data = [
			"basis_pengetahuan" => $model->getById($id_pengetahuan),
		];
		// var_dump($data);
		// die;
		$this->load->view("Admin/Edit_basis_pengetahuan", $data);
    }
    //untuk menghapus data
    public function hapus_data($id_pengetahuan){
        if (!isset($id_pengetahuan)) show_404();

		if ($this->M_basis_pengetahuan->hapus($id_pengetahuan)) {
			$this->session->set_flashdata('hapus', 'Berhasil Menghapus Data Pengetahuan');
			redirect(site_url('Basis_pengetahuan'));
		}
    }
}

?>