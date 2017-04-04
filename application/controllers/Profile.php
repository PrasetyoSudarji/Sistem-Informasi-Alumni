<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
    
    public function index(){
		
		$query = $this->Model->getNim($_SESSION['login'])->result_array();
		foreach($query as $query){
			$nim = $query["nim"];
		}
		
		$data = array(
			'session' => $_SESSION['login'],
			'page' => 'profile',
			'link' => 'profile',
			'profile' => $this->Model->getProfileMhs($nim)
		);
		$this->load->view('template/wrapper', $data);
    }
	
	public function edit_profile(){
		$query = $this->Model->getNim($_SESSION['login'])->result_array();
		foreach($query as $query){
			$nim = $query["nim"];
		}
		$data = array(
			'session' => $_SESSION['login'],
			'page' => 'edit_profile',
			'link' => 'edit_profile',
			'profile' => $this->Model->getProfileMhs($nim)
		);
		$this->load->view('template/wrapper', $data);
	}
	
	public function proc_update_foto(){
		$query = $this->Model->getNim($_SESSION['login'])->result_array();
		foreach($query as $query){
			$nim = $query["nim"];
		}
		$config['upload_path']          = './assets/uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 2048;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		
		$this->load->library('upload', $config);
		
		if ( !$this->upload->do_upload('userfile'))
		{
			echo "Upload error !!";
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
			'session' => $_SESSION['login'],
			'page' => 'edit_profile',
			'link' => 'edit_profile',
			'profile' => $this->Model->getProfileMhs($nim)
		);
		$this->load->view('template/wrapper', $data);
	}
	
	public function proc_update_profile(){
		$query = $this->Model->getNim($_SESSION['login'])->result_array();
		foreach($query as $query){
			$nim = $query["nim"];
		}
		
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
			'session' => $_SESSION['login'],
			'page' => 'input_sukses',
			'link' => 'input_sukses'
		);
		$this->load->view('template/wrapper', $data);
	}

	
}