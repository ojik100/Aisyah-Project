<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Indikator extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->model("Indikator_models"); //load model mahasiswa

		//validasi jika user belum login
		if($this->session->userdata('masuk') != TRUE){
				$url=base_url();
				redirect($url);
			}
	  }
	public function index()
	{
		$data['indikator'] =$this->Indikator_models->tampil_data()->result();
		$this->load->view('admin/indikator/index',$data);
	}
	public function add()
	{
		$this->load->view('admin/indikator/add');
	}
	public function save()
	{
		$usia_belita = $this->input->post('usia_belita');
		$jk = $this->input->post('jk');
		$tinggi_badan = $this->input->post('tinggi_badan');
		$berat_badan = $this->input->post('berat_badan');
		$data = array(
			'usia_belita' => $usia_belita,
			'jk' => $jk,
			'tinggi_badan' => $tinggi_badan,
			'berat_badan' => $berat_badan
			
			);
		$this->Indikator_models->input_data($data,'indikator');
		redirect('Indikator/index');
	}
	public function update()
	{
		$id = $this->input->post('id');
		$usia_belita = $this->input->post('usia_belita');
		$jk = $this->input->post('jk');
		$tinggi_badan = $this->input->post('tinggi_badan');
		$berat_badan = $this->input->post('berat_badan');
		$data = array(
			'usia_belita' => $usia_belita,
			'jk' => $jk,
			'tinggi_badan' => $tinggi_badan,
			'berat_badan' => $berat_badan
			
			);
			$where = array(
				'id' => $id
				);
		$this->Indikator_models->update_data($where,$data,'indikator');
		redirect('Indikator/index');
	}

	function edit($id){
		$data['indikator'] =$this->db->query("SELECT * FROM indikator WHERE id = $id")->result();
		$this->load->view('admin/indikator/edit',$data);
	}
	function hapus($id){
		$where = array('id' => $id);
		$this->Indikator_models->hapus_data($where,'indikator');
		redirect('Indikator/index');
	}
}

