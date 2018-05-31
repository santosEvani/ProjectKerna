<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//rota: https://kerna-karolaynedias.c9users.io/CI/index.php/documentacao/page_doc
class Documentacao extends CI_Controller {

	public function page_doc(){
		$this->load->view('documentacao');
	}
}
