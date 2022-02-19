<?php 

class M_profil extends CI_model
{
	private $_table = "tbl_admin";

	public $id_admin;
  public $username;
  public $no_admin;
  public $email_admin;
  public $foto_admin;
  public $nama_admin;
  public $alamat_admin;
  //public $password;

  public function rules()
  {
    return [
      [
        'field' => 'id_admin',
        'label' => 'id_admin',
        'rules' => 'required'
      ]

    ];
  }

  public function tampil_profil()
  {
   $query = $this->db->get('tbl_admin');
   return $query->result_array();
 }

 public function getById($id_admin)
{
  return $this->db->get_where($this->_table, ["id_admin" => $id_admin])->row();
}

public function update()
{
  $post = $this->input->post();
  $this->id_admin = $post["id_admin"];
  $this->nama_admin = $post["nama_admin"];
  $this->alamat_admin = $post["alamat_admin"];
  $this->no_admin = $post["no_admin"];
  $this->email_admin = $post["email_admin"];
  //$this->foto_admin = $post["foto_admin"];
  $this->username = $post["username"];
  // $this->password_admin = $post["password_admin"];
  //$this->password_admin = md5($post["password_admin"]);
  //$this->role = $post["role"];
 
  if (empty($_FILES["foto_admin"]["name"])) {
    $this->foto_admin = $this->do_upload();
  } else {
      //$this->foto_admin = $post["foto_admin"];
      $this->foto_admin = $this->do_upload();
  }

  return $this->db->update($this->_table, $this, array('id_admin' => $post['id_admin']));
}

function do_upload()
	{
        // setting konfigurasi upload
		$config['upload_path'] = './assets/Gambar/foto_profil';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
    $config['file_name']           = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
    $config['overwrite'] = true;
        // load library upload
		$this->load->library('upload', $config);
        // upload gambar
		$this->upload->do_upload('foto_admin');
		$result1 = $this->upload->data('file_name');
		return $result1;
  }

  public function ubahpw($id)
  {
    $post = $this->input->post();
    // $id=$this->input->post('id_admin');
    $password= md5($post["password"]);
   
    $this->db->set('password', $password);
    $this->db->where('id_admin', $id);
    $this->db->update('tbl_admin', $data);

  }

}