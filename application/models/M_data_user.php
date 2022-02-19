<?php

class M_data_user extends CI_Model {
 
    //untuk menambah data
    public function simpan_data()
    {
        $data = array(
			'id_user' => $_POST["id_user"],
			'nama_bayi' => $_POST["nama_bayi"],
			'tanggal_lahir' => $_POST["tgl_lahir"],
			'id_usia' => $_POST["Usia"],
			'nama_ibu' => $_POST["nama_ibu"],
			'nama_ayah' => $_POST["nama_ayah"],
			'no_telp' => $_POST["no_telp"],
			'alamat' => $_POST["alamat"],
		);		
		return $this->db->insert('tbl_data_user', $data);
	}  
	
	 //membuat auto code 
	 function autocode_user()
	 {
		 $q = $this->db->query("SELECT MAX(RIGHT(id_user,2)) AS kd_max FROM tbl_data_user");
		 $kd = "";
		 $i = "USR";
		 if ($q->num_rows() > 0) {
			 foreach ($q->result() as $k) {
				 $tmp = ((int) $k->kd_max) + 1;
				 $kd = sprintf("%04s", $tmp);
			 }
		 } else {
			 $kd = "0001";
		 }
		 date_default_timezone_set('Asia/Jakarta');
		 return $i . $kd;
		 
	 }



   }
?>