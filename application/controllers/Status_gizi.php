<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status_gizi extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->model("Status_gizi_models"); //load model mahasiswa

		//validasi jika user belum login
		if($this->session->userdata('masuk') != TRUE){
				$url=base_url();
				redirect($url);
			}
	  }
	public function index()
	{
		$data['status_gizi'] =$this->Status_gizi_models->tampil_data()->result();
		$this->load->view('admin/status_gizi/index',$data);
	}
	public function add()
	{
		$this->load->view('admin/status_gizi/add');
	}
	public function save()
	{
		$status_gizi = $this->input->post('status_gizi');
		$jk = $this->input->post('jk');
		$score = $this->input->post('score');
		$data = array(
			'status_gizi' => $status_gizi,
			'jk' => $jk,
			'score' => $score
			);
		$this->Status_gizi_models->input_data($data,'status_gizi');
		redirect('Status_gizi/index');
	}
	public function update()
	{
		$id = $this->input->post('id');
		$status_gizi = $this->input->post('status_gizi');
		$jk = $this->input->post('jk');
		$score = $this->input->post('score');
		$data = array(
			'status_gizi' => $status_gizi,
			'jk' => $jk,
			'score' => $score
			);
			$where = array(
				'id' => $id
		);
		$this->Status_gizi_models->update_data($where,$data,'status_gizi');
		redirect('Status_gizi/index');
	}

	function edit($id){
		$data['status_gizi'] =$this->db->query("SELECT * FROM status_gizi WHERE id = $id")->result();
		$this->load->view('admin/status_gizi/edit',$data);
	}
	function hapus($id){
		$where = array('id' => $id);
		$this->Status_gizi_models->hapus_data($where,'status_gizi');
		redirect('Status_gizi/index');
	}
}
