<?php

class M_basis_pengetahuan extends CI_Model {

    // private $_table = "tbl_data_pengetahuan";

	// public $id_produk;
	// public $id_pengetahuan;
	// public $aspek_perkembangan;
	// public $MB;
    // public $MD;
    
    public function rules()
	{
		return [
			[
				'field' => 'aspek_perkembangan',
				'label' => 'aspek_perkembangan',
				'rules' => 'required'
			]

		];
    }

    public function get_data($tbl_data_pengetahuan)
    {
        return $this->db->get('tbl_data_pengetahuan');
    }

    //untuk menambah data
    public function simpan_data()
    {
        $data = array(			
			'id_pengetahuan' => $_POST["id_pengetahuan"],
			'aspek_perkembangan' => $_POST["aspek_perkembangan"],
			'MB' => $_POST["MB"],
			'MD' => $_POST["MD"],
		);
		
		return $this->db->insert('tbl_data_pengetahuan', $data);
	}
	
	//membuat auto code 
    function autocode_pengetahuan()
	{
		$q = $this->db->query("SELECT MAX(RIGHT(id_pengetahuan,2)) AS kd_max FROM tbl_data_pengetahuan");
        $kd = "";
        $i = "CP";
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

    public function getById($id_pengetahuan)
    {
        $query = $this->db->get_where('tbl_data_pengetahuan', array('id_pengetahuan' => $id_pengetahuan));
		return $query->result();
    }

    public function update_basis_pengetahuan()
    {
        $data = array(
			'aspek_perkembangan' => $_POST["aspek_perkembangan"],
			'MB' => $_POST["MB"],
			'MD' => $_POST["MD"],
		);

		return $this->db->update(tbl_data_pengetahuan, $data, array('id_pengetahuan' => $_POST['id_pengetahuan']));
    }

    public function hapus($id_pengetahuan)
	{
		return $this->db->delete(tbl_data_pengetahuan, array("id_pengetahuan" => $id_pengetahuan));
	}
}
    
?>