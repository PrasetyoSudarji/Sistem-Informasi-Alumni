<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lowongan extends CI_Controller {
    
    public function index(){
		$data = array(
			'session' => $_SESSION['login'],
			'page' => 'lowongan',
			'link' => 'lowongan',
			'lowongan' => $this->Model->list_data_all('lowongan')
		);
		$this->load->view('template/wrapper', $data);
	
    }
	
	public function input_lowongan(){
		$data = array(
			'session' => $_SESSION['login'],
			'page' => 'input_lowongan',
			'link' => 'input_lowongan',
			'lowongan' => $this->Model->list_data_all('lowongan')
		);
		$this->load->view('template/wrapper', $data);
	
    }
	
	public function proc_input_lowongan(){
		
		$prodi = $_POST['prodi'];
		$query1 = $this->Model->getIdProdi($prodi)->result_array();
		foreach($query1 as $query){
			$id_prodi = $query["id"];
		}
		
		$query2 = $this->Model->getCounter($id_prodi)->result_array();
		foreach($query2 as $query){
			$no = $query["counter"];
			$kode = $id_prodi.$no;
			$no++;
		}
		
		$nama_perusahaan = $_POST['nama_perusahaan'];
		$expired = $_POST['expired'];
		$deskripsi = $_POST['deskripsi'];
		
		$data_insert = array(
			'kode' => $kode,
			'prodi' => $prodi,
			'nama_perusahaan' => $nama_perusahaan,
			'expired_time' => $expired,
			'deskripsi' => $deskripsi
		);
		$this->Model->simpan_data($data_insert,'lowongan');
		
		$data_insert2 = array(
			'counter' => $no
		);
		$this->Model->update("prodi",$id_prodi,"lowongan_counter",$data_insert2);
		
		
		$data = array(
			'kode' => $kode,
			'session' => $_SESSION['login'],
			'page' => 'input_sukses',
			'link' => 'input_sukses',
		);
		$this->load->view('template/wrapper', $data);
		
	}
	
	public function proc_kelola_lowongan(){
		if($_POST['btn'] == 1){
			$data_insert = array(
				'expired_time' => $_POST['expired_time'],
				'deskripsi' => $_POST['deskripsi']
			);
			$this->Model->update("kode",$_POST['kode'],"lowongan",$data_insert);
		}else{
			$this->Model->hapus("kode", $_POST['kode'], "lowongan");
		}
		
		$data = array(
			'session' => $_SESSION['login'],
			'page' => 'lowongan',
			'link' => 'lowongan',
			'lowongan' => $this->Model->list_data_all('lowongan')
		);
		$this->load->view('template/wrapper', $data);
	}
	
	public function proc_apply_lowongan($kode_lowongan){
		
		
		$data = array(
			'session' => $_SESSION['login'],
			'page' => 'lowongan',
			'link' => 'lowongan',
			'lowongan' => $this->Model->list_data_all('lowongan')
		);
		$this->load->view('template/wrapper', $data);
		
	}
	
}