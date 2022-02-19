<?php
class Profil extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_profil');
		$this->load->library('form_validation');
	}

	public function tampil_profil()
	{
		$show = $this->M_profil;
		$id_admin = $this->session->userdata('id_admin');

		$data = [
		"user" => $show->getById($id_admin)
        ];
        
		$this->load->view("Admin/Tampil_profil", $data);
    }
    
	public function edit($id = null)
	{
		$model = $this->M_profil;
		$validation = $this->form_validation;
		$validation->set_rules($model->rules());


		if ($validation->run()) {
			$model->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			//redirect(site_url('Admin/profil/tampil/'.$id));
		}
		
		$data["user"] = $model->getById($id);

        $this->load->view("Admin/Tampil_profil", $data);
	}

	public function edit_ubahpw($id = null)
	{
		$model = $this->M_profil;
		$data["user"] = $model->getById($id);
        $this->load->view("Admin/Ubah_pw", $data);
	}

	public function simpan_ubahpw($id = null)
	{
		$model = $this->M_profil;
		$model->ubahpw($id);
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			$this->session->sess_destroy(); // Hapus semua session
			redirect(site_url('Login'));
        
	}

}
?>