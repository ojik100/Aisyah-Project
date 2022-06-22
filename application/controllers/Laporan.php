<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	function __construct(){
		parent::__construct();
		//validasi jika user belum login
		if($this->session->userdata('masuk') != TRUE){
				$url=base_url();
				redirect($url);
			}
	  }
	public function index()
	{
		
		$data['nilai']=$this->db->query("SELECT * FROM penilaian")->result();
		// $data['nilai']=$this->db->query("SELECT 
		// penilaian.id, belita.nama_belita,belita.jk 
		// FROM penilaian
		// LEFT JOIN belita ON penilaian.nama_belita = belita.id")->result();
		// $data['dataimt'] = $this->db->query("SELECT berat_badan / tinggi_badan*tinggi_badan  as imt
		//  FROM penilaian")->row();
		$this->load->view('admin/laporan/index',$data);
	}
}
