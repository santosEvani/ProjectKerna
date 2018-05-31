<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//rota: https://kerna-karolaynedias.c9users.io/CI/index.php/roteiro/page_roteiro
class Roteiro extends CI_Controller {

	public function page_roteiro(){
		$this->load->view('roteiro');
	}
}
