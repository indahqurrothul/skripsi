<?php

class M_dashboard extends CI_Model {

    
    function tampil_data_user()
    {
        $this->db->select('*');
        $this->db->from('tbl_data_user'); 
        $this->db->join('tbl_data_usia', 'tbl_data_user.id_usia = tbl_data_usia.id_usia');
        return $this->db->get()->result();
    }
                
    function data_user()
    {
        $this->db->from('tbl_data_user');     
            $query = $this->db->get();
            return $query->num_rows();
    }
    function data_usia()
    {
        $this->db->from('tbl_data_usia');     
            $query = $this->db->get();
            return $query->num_rows();
    }

    function data_kuesioner()
    {
        $this->db->from('tbl_data_kuesioner');     
            $query = $this->db->get();
            return $query->num_rows();
    }

    function basis_pengetahuan()
    {
        $this->db->from('tbl_data_pengetahuan');     
            $query = $this->db->get();
            return $query->num_rows();
    }
}
?>