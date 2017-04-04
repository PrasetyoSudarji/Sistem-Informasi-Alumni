<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    
    public function index(){
		$data = array(
			'session' => $_SESSION['login'],
			'page' => 'list_user',
			'link' => 'list_user',
			'profile' => $this->Model->getProfile($_SESSION['login'])
		);
		$this->load->view('template/wrapper', $data);
    }
	
}