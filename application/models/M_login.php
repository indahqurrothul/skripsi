<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model
{
    private $_table = "tbl_admin";

    // public $id_admin;
    // public $nama_admin;
    // public $alamat_admin;
    // public $no_admin;
    // public $email_admin;
    // // public $foto_admin = "default.jpg";
    // public $username;
    // public $password;

    public function get($username)
    {
        $this->db->where('username', $username); // Untuk menambahkan Where Clause : username='$username_admin '
        $result = $this->db->get('tbl_admin')->row(); // Untuk mengeksekusi dan mengambil data hasil query

        return $result;
    }

    // Check username exists
    public function check_username_exists($username)
    {
        $query = $this->db->get_where('tbl_admin', array('username' => $username));
        if (empty($query->row_array())) {
            return true;
        } else {
            return false;
        }
    }
}