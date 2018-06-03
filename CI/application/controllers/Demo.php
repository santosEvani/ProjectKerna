<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//rota: https://kerna-karolaynedias.c9users.io/CI/index.php/demo/page_demo
class Demo extends CI_Controller {

	public function page_demo(){
		$this->load->view('demo');
	}
}