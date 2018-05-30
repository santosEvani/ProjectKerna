<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//rota: https://kerna-karolaynedias.c9users.io/CI/index.php/cadastro/page_cadastro
class Cadastro extends CI_Controller {

	public function page_cadastro(){
		$this->load->helper('url'); 
		$this->load->view('cadastro');
	}
}
