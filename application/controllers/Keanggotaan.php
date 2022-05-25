<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keanggotaan extends CI_Controller {

	function __construct(){
		parent::__construct();
		//validasi jika user belum login
		$this->load->model("Keanggotaan_models"); //load model mahasiswa

		if($this->session->userdata('masuk') != TRUE){
				$url=base_url();
				redirect($url);
			}
	  }
	public function index()
	{

		// 	$data['nilai']=$this->db->query("SELECT * FROM penilaian")->result();
		// // $data['nilai']=$this->db->query("SELECT 
		// // penilaian.id, belita.nama_belita,belita.jk 
		// // FROM penilaian
		// // LEFT JOIN belita ON penilaian.nama_belita = belita.id")->result();
		// $data['dataimt'] = $this->db->query("SELECT berat_badan / tinggi_badan*tinggi_badan  as imt
		//  FROM penilaian")->row();
		$data['keanggotaan'] = $this->db->query("SELECT keanggotaan.id, indikator.jk, keanggotaan.batas_atas,keanggotaan.batas_tengah,keanggotaan.batas_bawah,keanggotaan.variabel,keanggotaan.keterangan
		FROM keanggotaan LEFT JOIN indikator ON keanggotaan.id_indikator = indikator.id ")->result();
		$this->load->view('admin/keanggotaan/index',$data);
	}
	public function add()
	{
		$data['indikator'] = $this->db->query("SELECT * FROM indikator")->result();
		$this->load->view('admin/keanggotaan/add',$data);
	}
	public function save()
	{
		$batas_atas = $this->input->post('batas_atas');
		$batas_tengah = $this->input->post('batas_tengah');
		$batas_bawah = $this->input->post('batas_bawah');
		$id_indikator = $this->input->post('id_indikator');
		$variabel = $this->input->post('variabel');
		$keterangan = $this->input->post('keterangan');
	
 
		$data = array(
			'batas_atas' => $batas_atas,
			'batas_tengah' => $batas_tengah,
			'batas_bawah' => $batas_bawah,
			'id_indikator' => $id_indikator,
			'variabel' => $variabel,
			'keterangan' => $keterangan,
			);
		$this->Keanggotaan_models->input_data($data,'keanggotaan');
		redirect('Keanggotaan/index');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->Keanggotaan_models->hapus_data($where,'keanggotaan');
		redirect('Keanggotaan/index');
	}

}
