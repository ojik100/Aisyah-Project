<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belita extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model("Belita_models"); //load model mahasiswa

		if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
    }
	public function index()
	{

		$data['belita'] =$this->Belita_models->tampil_data()->result();

		$this->load->view('admin/belita/index',$data);
	}
	public function add()
	{
		// $data['belita'] = $this->db->query("SELECT * FROM belita")->result();
		$this->load->view('admin/belita/add');
	}
	function hapus($id){
		$where = array('id' => $id);
		$this->Belita_models->hapus_data($where,'belita');
		redirect('Belita/index');
	}
	
	public function save()
	{
		$id_users = $this->input->post('id_users');
		$nama_pemeriksa = $this->input->post('nama_pemeriksa');
		$nama_belita = $this->input->post('nama_belita');
		$jk = $this->input->post('jk');
		$tgl_lhr = $this->input->post('tgl_lhr');
		$nama_ayah = $this->input->post('nama_ayah');
		$nama_ibu = $this->input->post('nama_ibu');
		$alamat = $this->input->post('alamat');
		$no_ortu = $this->input->post('no_ortu');
 
		$data = array(
			'id_users' => $id_users,
			'nama_pemeriksa' => $nama_pemeriksa,
			'nama_belita' => $nama_belita,
			'jk' => $jk,
			'tgl_lhr' => $tgl_lhr,
			'nama_ayah' => $nama_ayah,
			'nama_ibu' => $nama_ibu,
			'alamat' => $alamat,
			'no_ortu' => $no_ortu
			);
		$this->Belita_models->input_data($data,'belita');
		redirect('Belita/index');
	}

	public function update()
	{
		$id = $this->input->post('id');
		$id_users = $this->input->post('id_users');
		$nama_pemeriksa = $this->input->post('nama_pemeriksa');
		$nama_belita = $this->input->post('nama_belita');
		$jk = $this->input->post('jk');
		$tgl_lhr = $this->input->post('tgl_lhr');
		$nama_ayah = $this->input->post('nama_ayah');
		$nama_ibu = $this->input->post('nama_ibu');
		$alamat = $this->input->post('alamat');
		$no_ortu = $this->input->post('no_ortu');
 
		$data = array(
			'id_users' => $id_users,
			'nama_pemeriksa' => $nama_pemeriksa,
			'nama_belita' => $nama_belita,
			'jk' => $jk,
			'tgl_lhr' => $tgl_lhr,
			'nama_ayah' => $nama_ayah,
			'nama_ibu' => $nama_ibu,
			'alamat' => $alamat,
			'no_ortu' => $no_ortu
			);

			$where = array(
		'id' => $id
		);
		$this->Belita_models->update_data($where,$data,'belita');
		redirect('Belita/index');
	}


	function edit($id){
		$data['belita'] =$this->db->query("SELECT * FROM belita WHERE id = $id")->result();
		$this->load->view('admin/belita/edit',$data);
	}
}
