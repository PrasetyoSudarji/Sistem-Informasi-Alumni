<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification extends CI_Controller {
    
    public function index(){
		$update_data = array (
				'status' => "1"
			);
		$this->Model->update("status","0","notification",$update_data);
		
		$data = array(
			'session' => $_SESSION['login'],
			'page' => 'notification',
			'link' => 'notification',
		);
		$this->load->view('template/wrapper', $data);
	
    }
	
}