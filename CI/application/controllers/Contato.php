<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//rota: https://kerna-karolaynedias.c9users.io/CI/index.php/contato/page_contato
class Contato extends CI_Controller {

	public function page_contato(){
		$this->load->view('contato');
	}
}
