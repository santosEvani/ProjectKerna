<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//rota: https://kerna-karolaynedias.c9users.io/CI/index.php/config/page_config
class Config extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
	
	public function page_config(){
		$this->load->view('config');
	}
}
