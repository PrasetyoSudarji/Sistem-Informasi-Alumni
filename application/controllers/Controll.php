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
		
		$prodi = $_POST['prodi'];
		$nama_perusahaan = $_POST['nama_perusahaan'];
		$expired = $_POST['expired'];
		$skill = $_POST['skill'];
		$data_insert = array(
			'prodi' => $prodi,
			'nama_perusahaan' => $nama_perusahaan,
			'expired_time' => $expired,
			'skill' => $skill
		);
		$this->Model->simpan_data($data_insert,'lowongan');
		$data = array(
			'page' => 'input_sukses',
			'link' => 'input_sukses',
		);
		$this->load->view('template/wrapper', $data);
	}
	
	public function profile(){
		$nim = 14113003;
		
		$data = array(
			'page' => 'profile',
			'link' => 'profile',
			'profile' => $this->Model->getProfile($nim)
		);
		$this->load->view('template/wrapper', $data);
	}
	
	public function editProfile(){
		$nim = 14113003;
		
		$data = array(
			'page' => 'edit_profile',
			'link' => 'edit_profile',
			'profile' => $this->Model->getProfile($nim)
		);
		$this->load->view('template/wrapper', $data);
	}
	
	public function updateFoto(){
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
			$this->Model->update('nim',$nim,'mahasiswa',$update_gambar);
		}
		
		$data = array(
			'page' => 'edit_profile',
			'link' => 'edit_profile',
			'profile' => $this->Model->getProfile($nim)
		);
		$this->load->view('template/wrapper', $data);
	}
	
	public function updateProfile(){
		$nim = 14113003;
		
		$update_profile = array(
			'nama' => $_POST['nama'],
			'nim' => $_POST['nim'],
			'prodi' => $_POST['prodi'],
			'tahun_lulus' => $_POST['tahun_lulus'],
			'jumlah_skill' => $_POST['jumlah_skill'],
			'linked_in' => $_POST['linked_in'],
			'fb' => $_POST['fb'],
			'twitter' => $_POST['twitter'],
			'instagram' => $_POST['instagram']
		);
		$this->Model->update('nim',$nim,'mahasiswa',$update_profile);
		
		$update_alamat = array(
			'rt' => $_POST['rt'],
			'rw' => $_POST['rw'],
			'desa/kelurahan' => $_POST['desa/kelurahan'],
			'kecamatan' => $_POST['kecamatan'],
			'kabupaten/kota' => $_POST['kabupaten/kota'],
			'provinsi' => $_POST['provinsi'],
		);
		$this->Model->update('nim',$nim,'data_alamat',$update_alamat);
		
		
		$data = array(
			'page' => 'input_sukses',
			'link' => 'input_sukses'
		);
		$this->load->view('template/wrapper', $data);
	}

}