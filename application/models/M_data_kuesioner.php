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
        $this->db->select(['*']);
        $this->db->from('tbl_data_kuesioner');
        $this->db->join('tbl_data_usia', 'tbl_data_usia.id_usia = tbl_data_kuesioner.id_usia');
        $this->db->join('tbl_data_pengetahuan', 'tbl_data_kuesioner.id_pengetahuan = tbl_data_pengetahuan.id_pengetahuan');
        $this->db->order_by('tbl_data_kuesioner.id_kuesioner', 'asc');
        $return = $this->db->get('');
        return $return->result();
    }

    public function get_aspek_perkembangan(){
        return $this->db->get('tbl_data_pengetahuan')->result();
    }
    
    //milik frontend
    public function get_data_frontend($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_data_kuesioner');
        $this->db->join('tbl_data_usia', 'tbl_data_kuesioner.id_usia = tbl_data_usia.id_usia'); 
        $this->db->join('tbl_data_pengetahuan', 'tbl_data_pengetahuan.id_pengetahuan = tbl_data_kuesioner.id_pengetahuan', 'left');       
        $this->db->where('tbl_data_kuesioner.id_usia', $id);
        $return = $this->db->get('');
        return $return->result();
    }

    //milik frontend -> untuk menyimpan data pertanyaan/jawaban ke database
    public function simpandata_pertanyaan()
    {
        $this->db->select('*');
        $this->db->from('tbl_data_kuesioner');
        $this->db->join('tbl_data_usia', 'tbl_data_kuesioner.id_usia = tbl_data_usia.id_usia'); 
        $this->db->join('tbl_data_pengetahuan', 'tbl_data_pengetahuan.id_pengetahuan = tbl_data_kuesioner.id_pengetahuan', 'left');       
        $this->db->where('tbl_data_kuesioner.id_usia');
        $return = $this->db->get('');
        return $return->result();
    }

    //milik frontend -> untuk menyimpan data pertanyaan/jawaban ke database
    public function save_data_CF($data_pertanyaan)
    {
        return $this->db->insert_batch('tbl_data_konsultasi', $data_pertanyaan);
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
            'id_pengetahuan' => $_POST["aspek_perkembangan"],
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
            'id_pengetahuan' => $_POST["aspek_perkembangan"],
			'pertanyaan' => $_POST["pertanyaan"],
		);

		return $this->db->update('tbl_data_kuesioner', $data, array('id_kuesioner' => $_POST['id_kuesioner']));
    }

    public function hapus($id_kuesioner)
	{
		return $this->db->delete("tbl_data_kuesioner", array("id_kuesioner" => $id_kuesioner));
	}

    //data nilai CF aspek gerak kasar
    public function get_data_gerakkasar($id_user)
    {
        $this->db->select(['SUM(tbl_data_konsultasi.Nilai_CFuser) AS Nilai_gerakkasar']);
        $this->db->from('tbl_data_konsultasi');
        $this->db->join('tbl_data_kuesioner', 'tbl_data_kuesioner.id_kuesioner = tbl_data_konsultasi.id_kuesioner');
        $this->db->where('tbl_data_kuesioner.id_pengetahuan', 'CP01');
        $this->db->where('tbl_data_konsultasi.id_user', $id_user);
        $return = $this->db->get('');
        return $return->result();
    }

    //data nilai CF aspek gerak halus
    public function get_data_gerakhalus($id_user)
    {
        $this->db->select(['SUM(tbl_data_konsultasi.Nilai_CFuser) AS Nilai_gerakhalus']);
        $this->db->from('tbl_data_konsultasi');
        $this->db->join('tbl_data_kuesioner', 'tbl_data_kuesioner.id_kuesioner = tbl_data_konsultasi.id_kuesioner');
        $this->db->where('tbl_data_kuesioner.id_pengetahuan', 'CP02');
        $this->db->where('tbl_data_konsultasi.id_user', $id_user);
        $return = $this->db->get('');
        return $return->result();
    }

    //data nilai CF aspek bicara dan bahasa
    public function get_data_bicara_bahasa($id_user)
    {
        $this->db->select(['SUM(tbl_data_konsultasi.Nilai_CFuser) AS Nilai_bicara_bahasa']);
        $this->db->from('tbl_data_konsultasi');
        $this->db->join('tbl_data_kuesioner', 'tbl_data_kuesioner.id_kuesioner = tbl_data_konsultasi.id_kuesioner');
        $this->db->where('tbl_data_kuesioner.id_pengetahuan', 'CP03');
        $this->db->where('tbl_data_konsultasi.id_user', $id_user);
        $return = $this->db->get('');
        return $return->result();
    }

    //data nilai CF aspek sosialisasi dan kemandirian
    public function get_data_sosialisasi_kemandirian($id_user)
    {
        $this->db->select(['SUM(tbl_data_konsultasi.Nilai_CFuser) AS Nilai_sosialisasi_kemandirian']);
        $this->db->from('tbl_data_konsultasi');
        $this->db->join('tbl_data_kuesioner', 'tbl_data_kuesioner.id_kuesioner = tbl_data_konsultasi.id_kuesioner');
        $this->db->where('tbl_data_kuesioner.id_pengetahuan', 'CP04');
        $this->db->where('tbl_data_konsultasi.id_user', $id_user);
        $return = $this->db->get('');
        return $return->result();
    }

    //mengambil data stimulasi gerak kasar
    public function get_data_stimulasi_gerakkasar($id_usia)
    {
        $this->db->select('*');
        $this->db->from('tbl_data_stimulasi');
        $this->db->where('tbl_data_stimulasi.id_pengetahuan', 'CP01');
        $this->db->where('tbl_data_stimulasi.id_usia', $id_usia);
        $return = $this->db->get('');
        return $return->result();
    }

    //mengambil data stimulasi gerak halus
    public function get_data_stimulasi_gerakhalus($id_usia)
    {
        $this->db->select('*');
        $this->db->from('tbl_data_stimulasi');
        $this->db->where('tbl_data_stimulasi.id_pengetahuan', 'CP02');
        $this->db->where('tbl_data_stimulasi.id_usia', $id_usia);
        $return = $this->db->get('');
        return $return->result();
    }

    //mengambil data stimulasi bicara bahasa
    public function get_data_stimulasi_bicara_bahasa($id_usia)
    {
        $this->db->select('*');
        $this->db->from('tbl_data_stimulasi');
        $this->db->where('tbl_data_stimulasi.id_pengetahuan', 'CP03');
        $this->db->where('tbl_data_stimulasi.id_usia', $id_usia);
        $return = $this->db->get('');
        return $return->result();
    }

    //mengambil data stimulasi sosialisasi dan kemandirian
    public function get_data_stimulasi_sosialisasi_kemandirian($id_usia)
    {
        $this->db->select('*');
        $this->db->from('tbl_data_stimulasi');
        $this->db->where('tbl_data_stimulasi.id_pengetahuan', 'CP04');
        $this->db->where('tbl_data_stimulasi.id_usia', $id_usia);
        $return = $this->db->get('');
        return $return->result();
    }

}
?>