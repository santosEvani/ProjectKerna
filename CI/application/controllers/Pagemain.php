<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//rota: https://kerna-karolaynedias.c9users.io/CI/index.php/pagemain/index
class Pagemain extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		//$this->load->helper('url'); 
		$this->load->view('home');
	}
}
