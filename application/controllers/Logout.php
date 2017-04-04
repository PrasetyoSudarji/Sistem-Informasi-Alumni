<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
    
    public function index(){
		$_SESSION['login'] = null;
		$_SESSION['status'] = null;
		$data = array(
			'session' => $_SESSION['login'],
			'page' => 'login_view',
			'link' => 'login_view'
		);
		
		$this->load->view('template/wrapper', $data);
    }
	
}