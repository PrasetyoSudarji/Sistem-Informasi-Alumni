<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function index(){
		$session = null;
		$data = array(
			'session' => $session, 
			'page' => 'login_view',
			'link' => 'login_view'
		);
		
		$this->load->view('template/wrapper', $data);
    }
	
	public function admin(){
		$session = null;
		$data = array(
			'session' => $session, 
			'page' => 'login_admin',
			'link' => 'login_admin'
		);
		
		$this->load->view('template/wrapper', $data);
    }
    
	public function log_in(){
		$queryuser = $this->Model->ambil("nim",$_POST["nim"],"mahasiswa");
		if ($queryuser->result_array() == null){
			$_SESSION['login'] = null;
			$data = array(
				'session' => $_SESSION['login'],
				'page' => 'login_view',
				'link' => 'login_view'
			);
		}else{
			$_SESSION['login'] = $_POST["nim"];
			$data = array(
				'session' => $_SESSION['login'],
				'page' => 'home',
				'link' => 'home'
			);
		}
		$this->load->view('template/wrapper', $data);
    }
	
	public function admin(){
		$queryuser = $this->Model->ambil("nim",$_POST["nim"],"mahasiswa");
		if ($queryuser->result_array() == null){
			$_SESSION['login'] = null;
			$data = array(
				'session' => $_SESSION['login'],
				'page' => 'login_view',
				'link' => 'login_view'
			);
		}else{
			$_SESSION['login'] = $_POST["nim"];
			$data = array(
				'session' => $_SESSION['login'],
				'page' => 'home',
				'link' => 'home'
			);
		}
		$this->load->view('template/wrapper', $data);
    }
	
    public function login_nya($user, $password){
        $ch = curl_init(); //buat resourcce cURL

        //set opsi URL dan opsi RETURNTRANSFER
        curl_setopt($ch, CURLOPT_URL, "http://192.168.6.16/ariefsso/?user=".$user."&password=".md5($password)."");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        //dapatkan halaman URL dan berikan ke variabel $output
        $output = curl_exec($ch);

        //tutup resource cURL
        curl_close($ch);
        
        //cetak output
        $output = json_decode($output);
        
        echo 'status = '.$output->status.'<br/>';
        echo 'user = '.$output->user.'<br/>';
        echo 'name = '.$output->name.'<br/>';
        echo 'occupation = '.$output->occupation.'<br/>';
    }
	
}