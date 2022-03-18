<?php

class Frontend extends CI_Controller {

    function __construct()          
	{
		parent::__construct();
		$this->load->model('M_data_user');
		$this->load->model('M_data_kuesioner');
		$this->load->library('form_validation');
    }
    
    public function index () {
        // $this->load->model('M_data_usia');
        // $data['data_usia']= $this->M_data_usia->get_data('tbl_data_usia')->result();

        $this->load->view('Frontend/index');
    }
    
    public function infoperkembangan () {
        // $this->load->model('M_data_usia');
        // $data['data_usia']= $this->M_data_usia->get_data('tbl_data_usia')->result();

        $this->load->view('Frontend/infoperkembangan');
    }
//form isi data bayi
    public function konsultasi1 () {
        $this->load->model('M_data_usia');
        $data=[
            
            "data_usia" => $this->M_data_usia->get_data_usia()->result(),  
            "autocode_user" => $this->M_data_user->autocode_user(),        
        ];
        
        // var_dump($data);
        // die;
        $this->load->view('Frontend/form_databayi', $data);        
    }
    
   //form isi pertanyaan
   public function konsultasi2 () {
    // $this->load->model('M_data_usia');
    // $data['data_usia']= $this->M_data_usia->get_data('tbl_data_usia')->result();
    $this->load->model('M_data_kuesioner');
    $data=[
        
        "data_kuesioner" => $this->M_data_kuesioner->get_data(),  
        "autocode_kuesioner" => $this->M_data_kuesioner->autocode_kuesioner(),        
    ];
   
    
    $this->load->view('Frontend/form_pertanyaan', $data);
    }
    
    //tips
    public function tips () {
        // $this->load->model('M_data_usia');
        // $data['data_usia']= $this->M_data_usia->get_data('tbl_data_usia')->result();
    
        $this->load->view('Frontend/tips');
    }
    
    //form hasil
    public function hasilkonsultasi () {
        // $this->load->model('M_data_usia');
        // $data['data_usia']= $this->M_data_usia->get_data('tbl_data_usia')->result();
    
        $this->load->view('Frontend/form_hasilperkembangan');
    }

    //form tambah data user
    public function simpan_datauser(){
        $model = $this->M_data_user;

		if ($model->simpan_data()) {
            $this->session->set_flashdata('success', 'Berhasil Menambah User');
           
            $this->session->set_userdata('id_user', $_POST["id_user"]);
            $this->session->set_userdata('id_usia', $_POST["Usia"]);

            $this->load->model('M_data_kuesioner');
            $data=[
        
                "data_kuesioner" => $this->M_data_kuesioner->get_data_frontend($_POST["Usia"]),  
                "autocode_kuesioner" => $this->M_data_kuesioner->autocode_kuesioner(),        
            ];

            $this->load->view('Frontend/form_pertanyaan', $data);
		}
    }


    //form tambah data pertanyaan (menyimpan jawaban ke database)
    public function simpan_datapertanyaan(){
        if (!$this->session->userdata('id_user')) {
            redirect(base_url("Frontend/konsultasi1"));
        }

        $model = $this->M_data_kuesioner;

        $data_pertanyaan = array();
        $index = 0;
        $nilai_CFuser = $_POST["Tidak"];
        $nilai_CFpakar = $_POST["CFpakar"];
        $id_kuesioner = $_POST["id_kuesioner"];
        
        foreach($id_kuesioner as $data_kuesioner){

            array_push($data_pertanyaan, array(
                'id_user' => $this->session->userdata('id_user'),
                'id_kuesioner' => $data_kuesioner,
                'Nilai_CFpakar' => $nilai_CFpakar[$index],
                'Nilai_CFuser' => $nilai_CFuser[$index],
            ));

            $index++;

        }

        $this->M_data_kuesioner->save_data_CF($data_pertanyaan);

        redirect('Frontend/nilai_perhitungan_cf');
        
    }


    //hitung CF
    public function nilai_perhitungan_cf(){

        if (!$this->session->userdata('id_user')) {
            redirect(base_url("Frontend/konsultasi1"));
        }
        
        $id_user = $this->session->userdata('id_user');
        $id_usia = $this->session->userdata('id_usia');


        $data=[        
            "data_gerakkasar" => $this->M_data_kuesioner->get_data_gerakkasar($id_user),  
            "data_gerakhalus" => $this->M_data_kuesioner->get_data_gerakhalus($id_user),  
            "data_bicara_bahasa" => $this->M_data_kuesioner->get_data_bicara_bahasa($id_user),  
            "data_sosialisasi_kemandirian" => $this->M_data_kuesioner->get_data_sosialisasi_kemandirian($id_user),  
            "stimulasi_gerakkasar" => $this->M_data_kuesioner->get_data_stimulasi_gerakkasar($id_usia),  
            "stimulasi_gerakhalus" => $this->M_data_kuesioner->get_data_stimulasi_gerakhalus($id_usia),  
            "stimulasi_bicara_bahasa" => $this->M_data_kuesioner->get_data_stimulasi_bicara_bahasa($id_usia),  
            "stimulasi_sosialisasi_kemandirian" => $this->M_data_kuesioner->get_data_stimulasi_sosialisasi_kemandirian($id_usia),  
        ];


        $this->load->view('Frontend/form_hasilperkembangan', $data);
        $this->session->unset_userdata('id_user'); // Menghapus Session id_user
        $this->session->unset_userdata('id_usia'); // Menghapus Session id_usia

    }

}
?>