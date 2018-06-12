<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//rota: https://kerna-karolaynedias.c9users.io/CI/index.php/demo/page_demo
class Demo extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}
	
	public function page_demo(){
		$this->load->view('demo');
	}
	
	public function form(){
        $sess = $this->session->userdata("nome");
        if(isset($sess)){
            $this->load->view("produto");
        }else{
            $this->session->set_userdata("msgErro","Você precisa estar logado");
            redirect('https://kerna-karolaynedias.c9users.io/CI/login/page_login',true);
        }
    }
}