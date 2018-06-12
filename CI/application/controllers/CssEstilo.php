<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//rota: https://kerna-karolaynedias.c9users.io/CI/index.php/cssEstilo/page_estilo
class CssEstilo extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}
	
	public function page_estilo(){
		$this->load->view('cssEstilo');
	}
}
