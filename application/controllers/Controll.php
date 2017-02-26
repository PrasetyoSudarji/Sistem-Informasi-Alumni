<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controll extends CI_Controller {
	
	public function index(){
		$data = array(
			'page' => 'home',
			'link' => 'home'
		);
		$this->load->view('template/wrapper', $data);
	}
	
	public function lowongan(){
		
		$data = array(
			'page' => 'lowongan',
			'link' => 'lowongan',
			'lowongan' => $this->Model->list_data_all('lowongan')
		);
		$this->load->view('template/wrapper', $data);
	}
	
	public function lowongan_admin(){
		$data = array(
			'page' => 'lowongan_admin',
			'link' => 'lowongan_admin'
		);
		$this->load->view('template/wrapper', $data);
	}
	
	public function insert_lowongan(){
		$id = $_POST['id_lowongan'];
		$nama_lowongan = $_POST['nama_lowongan'];
		$nama_perusahaan = $_POST['nama_perusahaan'];
		$skill = $_POST['skill'];
		$data_insert = array(
			'id' => $id,
			'nama_lowongan' => $nama_lowongan,
			'nama_perusahaan' => $nama_perusahaan,
			'skill' => $skill
		);
		$this->Model->simpan_data($data_insert,'lowongan');
		$data = array(
			'page' => 'lowongan_admin',
			'link' => 'lowongan_admin'
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