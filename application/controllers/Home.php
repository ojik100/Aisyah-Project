<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->view('admin/home');
	}
}
