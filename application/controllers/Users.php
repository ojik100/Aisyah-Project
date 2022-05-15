<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model("Users_models"); //load model mahasiswa
    }

	public function index()
	{
		$data['users'] =$this->Users_models->tampil_data()->result();
		$this->load->view('admin/users/index',$data);
	}
	public function add()
	{
		$this->load->view('admin/users/add');
	}
	public function save()
	{
		$nama_belita = $this->input->post('nama_belita');
		$nip = $this->input->post('nip');
		$nama_ayah = $this->input->post('nama_ayah');
		$nama_ibu = $this->input->post('nama_ibu');
		$jk = $this->input->post('jk');
		$password = $this->input->post('password');
		$level = $this->input->post('level');
 
		$data = array(
			'nama_belita' => $nama_belita,
			'nip' => $nip,
			'nama_ayah' => $nama_ayah,
			'nama_ibu' => $nama_ibu,
			'jk' => $jk,
			'password' => $password,
			'level' => $level
			);
		$this->Users_models->input_data($data,'users');
		redirect('Users/index');
	}
	public function update()
	{
		$id = $this->input->post('id');
		$nama_belita = $this->input->post('nama_belita');
		$nip = $this->input->post('nip');
		$nama_ayah = $this->input->post('nama_ayah');
		$nama_ibu = $this->input->post('nama_ibu');
		$jk = $this->input->post('jk');
		$password = $this->input->post('password');
		$level = $this->input->post('level');
 
		$data = array(
			'nama_belita' => $nama_belita,
			'nip' => $nip,
			'nama_ayah' => $nama_ayah,
			'nama_ibu' => $nama_ibu,
			'jk' => $jk,
			'password' => $password,
			'level' => $level
			);
			
		$where = array(
		'id' => $id
		);
		$this->Users_models->update_data($where,$data,'users');
		redirect('Users/index');
	}
	function hapus($id){
		$where = array('id' => $id);
		$this->Users_models->hapus_data($where,'users');
		redirect('Users/index');
	}
	function edit($id){
		$data['users'] =$this->db->query("SELECT * FROM users WHERE id = $id")->result();
		$this->load->view('admin/users/edit',$data);
	}
}
