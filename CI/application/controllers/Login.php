<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//rota: https://kerna-karolaynedias.c9users.io/CI/index.php/login/page_login
class Login extends CI_Controller {

	public function page_login(){
	    
		$this->load->view('login');
	}
}