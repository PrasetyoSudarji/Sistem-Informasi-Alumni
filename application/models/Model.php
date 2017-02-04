<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {
	public function GetAlumni()
	{
		$data = $this->db->query("select * from data_alumni");
		return $data->result_array();
	}
	
	public function GetProfil($nim)
	{
		$data = $this->db->query("select * from data_alumni where nim='$nim'");
		return $data->result_array();
	}
	
	public function Login($nim,$password)
	{
		$data = $this->db->query("select * from data_alumni where nim='$nim' and password='$password'");
		return $data->result_array();
	}
}
