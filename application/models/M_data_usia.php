<?php

class M_data_usia extends CI_Model {

    public function rules()
	{
		return [
			[
				'field' => 'usia',
				'label' => 'usia',
				'rules' => 'required'
			]

		];
	}

    public function get_data($tbl_data_usia)
    {
        return $this->db->get('tbl_data_usia');
	}
	
    public function get_data_usia()
    {
        return $this->db->get('tbl_data_usia');
    }

	//untuk menambah data
    public function simpan_data()
    {
        $data = array(
            'id_usia' => $_POST["id_usia"],
			'usia' => $_POST["usia"],
		);
		
		return $this->db->insert('tbl_data_usia', $data);
    }

    public function getById($id_usia)
    {
        $query = $this->db->get_where('tbl_data_usia', array('id_usia' => $id_usia));
		return $query->result();
    }
//membuat auto code 
    function autocode_usia()
	{
		$q = $this->db->query("SELECT MAX(RIGHT(id_usia,2)) AS kd_max FROM tbl_data_usia");
        $kd = "";
        $i = "RU";
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $k) {
				$tmp = ((int) $k->kd_max) + 1;
				$kd = sprintf("%02s", $tmp);
			}
		} else {
			$kd = "01";
		}
		date_default_timezone_set('Asia/Jakarta');
        return $i . $kd;
        
	}


    public function update_data_usia()
    {
        $data = array(
			'usia' => $_POST["usia"],
		);

		return $this->db->update(tbl_data_usia, $data, array('id_usia' => $_POST['id_usia']));
    }

    public function hapus($id_usia)
	{
		return $this->db->delete(tbl_data_usia, array("id_usia" => $id_usia));
	}
}