<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controll extends CI_Controller {
	
	public function index(){
		$session = null;
		
		$data = array(
			'session' => $session, 
			'page' => 'home',
			'link' => 'home'
		);
		
		$this->load->view('template/wrapper', $data);
	}
	
	public function home(){
		$session = $_SESSION['login'];
		
		$data = array(
			'session' => $session, 
			'page' => 'home',
			'link' => 'home'
		);
		
		$this->load->view('template/wrapper', $data);
	}
	
	
}