<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model');
	}

	public function index(){
		$data = array(
			'page' => 'admin',
			'link' => 'admin'
		);
		$this->load->view('template/wrapper', $data);
	}
	
	public function profile(){
		$nim = 14113003;
		$config['upload_path']          = './assets/uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 2048;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		
		$this->load->library('upload', $config);
		if ( !$this->upload->do_upload('userfile'))
		{
			
		}
		else
		{
			$img = $this->upload->data();
			$gambar = $img['file_name'];
			$update_gambar = array (
				'foto' => $gambar
			);
			$this->Model->update('nim',$nim,'data_alumni',$update_gambar);
		}
		
		$data = array(
			'page' => 'profile',
			'link' => 'profile',
			'profile' => $this->Model->getProfile($nim)
		);
		$this->load->view('template/wrapper', $data);
	}

}