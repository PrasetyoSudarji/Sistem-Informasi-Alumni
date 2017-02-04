<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		/*$data = $this->Model->GetAlumni();
		foreach($data as $mahasiswa){
			echo "Nama       : ".$mahasiswa['nama']."</br>";
			echo "NIM        : ".$mahasiswa['nim']."</br>";
			echo "Tahun Lulus: ".$mahasiswa['tahun_lulus']."<hr>";
		}*/
		/*$profil = $this->Model->GetProfil($nim);
		foreach($profil as $user){
			echo "Nama : ".$user['nama']."</br>";
			echo "NIM : ".$user['nim']."</br>";
			echo "Tahun Lulus : ".$user['tahun_lulus']."</br >";
		}*/
		$Auth = $this->load->view('welcome_message');
		
	}
}
