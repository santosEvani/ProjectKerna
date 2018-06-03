<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//rota: https://kerna-karolaynedias.c9users.io/CI/index.php/sobre/page_sobre
class Sobre extends CI_Controller {

	public function page_sobre(){
		$this->load->view('sobre');
	}
}