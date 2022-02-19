<?php

class M_data_kuesioner extends CI_Model {

    public function rules()
	{
		return [
			[
				'field' => 'pertanyaan',
				'label' => 'pertanyaan',
				'rules' => 'required'
			]

		];
    }
    
    //membuat auto code 
    function autocode_kuesioner()
	{
		$q = $this->db->query("SELECT MAX(RIGHT(id_kuesioner,2)) AS kd_max FROM tbl_data_kuesioner");
        $kd = "";
        $i = "QU";
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $k) {
				$tmp = ((int) $k->kd_max) + 1;
				$kd = sprintf("%03s", $tmp);
			}
		} else {
			$kd = "001";
		}
		date_default_timezone_set('Asia/Jakarta');
        return $i . $kd;
        
	}

    public function get_data()
    {
        $this->db->select(['a.usia','a.id_usia', 'b.pertanyaan', 'b.id_kuesioner']);
        $this->db->from('tbl_data_kuesioner b');
        $this->db->join('tbl_data_usia a', 'a.id_usia = b.id_usia', 'left');
        $this->db->order_by('usia', 'asc');
        $return = $this->db->get('');
        return $return->result();
    }
    
    //milik frontend
    public function get_data_frontend($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_data_kuesioner');
        $this->db->join('tbl_data_usia', 'tbl_data_kuesioner.id_usia = tbl_data_usia.id_usia');        
        $this->db->where('tbl_data_kuesioner.id_usia', $id);
        $return = $this->db->get('');
        return $return->result();
    }

    public function get_usia(){
        return $this->db->get('tbl_data_usia')->result();
    }
    
    //untuk menambah data
    public function simpan_data()
    {
        $data = array(
            'id_kuesioner' => $_POST['id_kuesioner'],
			'id_usia' => $_POST["usia"],
			'pertanyaan' => $_POST["pertanyaan"],
		);		
		return $this->db->insert('tbl_data_kuesioner', $data);
    }

    //menampilkan data berdasarkan id yg di pilih
    public function getById($id_kuesioner)
    {
        $this->db->from('tbl_data_kuesioner');
        $this->db->join('tbl_data_usia', 'tbl_data_kuesioner.id_usia = tbl_data_usia.id_usia');
        $this->db->where('tbl_data_kuesioner.id_kuesioner', $id_kuesioner);
        // $query = $this->db->get_where('tbl_data_kuesioner', array('id_kuesioner' => $id_kuesioner));
		return $this->db->get()->result();
    }

    //menampilkan semua list field (combo box)
    public function getById2()
    {
        $this->db->from('tbl_data_usia');
        return $this->db->get()->result();
    }

    public function update_data_kuesioner()
    {
        $data = array(
			'id_usia' => $_POST["usia"],
			'pertanyaan' => $_POST["pertanyaan"],
		);

		return $this->db->update('tbl_data_kuesioner', $data, array('id_kuesioner' => $_POST['id_kuesioner']));
    }

    public function hapus($id_kuesioner)
	{
		return $this->db->delete(tbl_data_kuesioner, array("id_kuesioner" => $id_kuesioner));
	}
}
?>