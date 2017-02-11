<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function index(){
        echo 'hello';
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