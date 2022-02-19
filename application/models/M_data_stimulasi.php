<?php

class M_data_stimulasi extends CI_Model {

    public function rules()
	{
		return [
			[
				'field' => 'stimulasi',
				'label' => 'stimulasi',
				'rules' => 'required'
			]

		];
	}

public function get_data()
    {
        $this->db->select(['*']);
        $this->db->from('tbl_data_stimulasi');
        $this->db->join('tbl_data_usia', 'tbl_data_usia.id_usia = tbl_data_stimulasi.id_usia');
        $this->db->join('tbl_data_pengetahuan', 'tbl_data_stimulasi.id_pengetahuan = tbl_data_pengetahuan.id_pengetahuan');
        //$this->db->order_by('usia', 'asc');
        $return = $this->db->get('');
        return $return->result();
    }

    public function get_usia(){
        return $this->db->get('tbl_data_usia')->result();
    }

    public function get_aspek_perkembangan(){
        return $this->db->get('tbl_data_pengetahuan')->result();
    }

    //untuk menambah data
    public function simpan_data()
    {
        $data = array(        
			'id_stimulasi' => $_POST["id_stimulasi"],
			'id_usia' => $_POST["usia"],
			'id_pengetahuan' => $_POST["aspek_perkembangan"],
			'stimulasi' => $_POST["stimulasi"],
		);		
		return $this->db->insert('tbl_data_stimulasi', $data);
    }    

    //membuat auto code 
    function autocode_stimulasi()
	{
		$q = $this->db->query("SELECT MAX(RIGHT(id_stimulasi,2)) AS kd_max FROM tbl_data_stimulasi");
        $kd = "";
        $i = "STM";
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

    public function getById($id_stimulasi)
    {
        $this->db->from('tbl_data_stimulasi');
        $this->db->join('tbl_data_usia', 'tbl_data_usia.id_usia = tbl_data_stimulasi.id_usia');
        //$this->db->join('tbl_data_pengetahuan', 'tbl_data_stimulasi.id_pengetahuan = tbl_data_pengetahuan.id_pengetahuan');        
        $this->db->where('tbl_data_stimulasi.id_stimulasi', $id_stimulasi);
        // $query = $this->db->get_where('tbl_data_kuesioner', array('id_kuesioner' => $id_kuesioner));
		return $this->db->get()->result();
    }

    public function getById2()
    {
        $this->db->from('tbl_data_usia');
        //$this->db->join('tbl_data_usia', 'tbl_data_usia.id_usia = tbl_data_stimulasi.id_usia');
        //$this->db->join('tbl_data_pengetahuan', 'tbl_data_stimulasi.id_pengetahuan = tbl_data_pengetahuan.id_pengetahuan');        
        //$this->db->where('tbl_data_stimulasi.id_stimulasi', $id_stimulasi);
        // $query = $this->db->get_where('tbl_data_kuesioner', array('id_kuesioner' => $id_kuesioner));
		return $this->db->get()->result();
    }

    public function update_data_stimulasi()
    {
        $data = array(
			'id_usia' => $_POST["usia"],
			'id_pengetahuan' => $_POST["aspek_perkembangan"],
			'stimulasi' => $_POST["stimulasi"],
        );
        
        // var_dump($data);
        // die;

		return $this->db->update('tbl_data_stimulasi', $data, array('id_stimulasi' => $_POST['id_stimulasi']));
    }

    public function hapus($id_stimulasi)
	{
		return $this->db->delete(tbl_data_stimulasi, array("id_stimulasi" => $id_stimulasi));
	}
}
?>