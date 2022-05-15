<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('Login_models');
    }
 
	public function index()
	{

		// $data['belita'] = $this->db->query("SELECT * FROM belita")->result();
		$this->load->view('admin/login');
	}


	function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }

	function auth(){
        $nip=htmlspecialchars($this->input->post('nip',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
        $cek_dosen=$this->Login_models->auth($nip,$password);
 
        if($cek_dosen->num_rows() > 0){ //jika login sebagai dosen
                $data=$cek_dosen->row_array();
                $this->session->set_userdata('masuk',TRUE);
                 if($data['level']=="Bidan"){ //Akses bidan
                    $this->session->set_userdata('akses',"Bidan");
                    $this->session->set_userdata('id',$data['id']);
                    $this->session->set_userdata('nip',$data['nip']);
                    $this->session->set_userdata('nama',$data['nama_belita']);
                    redirect('Home');
 
                 }else if($data['level']== "Petugas"){ //akses petugas
                    $this->session->set_userdata('akses',"Petugas");
					$this->session->set_userdata('id',$data['id']);
                    $this->session->set_userdata('nip',$data['nip']);
                    $this->session->set_userdata('nama',$data['nama_belita']);
                    redirect('Home');
                 }
				 else if($data['level']== "Admin"){ //akses petugas
                    $this->session->set_userdata('akses',"Admin");
					$this->session->set_userdata('id',$data['id']);
                    $this->session->set_userdata('nip',$data['nip']);
                    $this->session->set_userdata('nama',$data['nama_belita']);
                    redirect('Home');
                 }
 
       					 }else{  // jika username dan password tidak ditemukan atau salah
                            $url=base_url();
                            echo $this->session->set_flashdata('msg','<p class="alert alert-danger" role="alert">Username Atau Password Salah !</p>');
                            redirect($url);
                    }
        }
 
    }

