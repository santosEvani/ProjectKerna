<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//rota: https://kerna-karolaynedias.c9users.io/CI/index.php/login/page_login
class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('session');
	}
	
	public function page_login(){
	    $data["msgErro"] = $this->session->userdata("msgErro");
        $this->load->view("login",$data);
        $this->session->unset_userdata("msgErro");
	}
	
	public function autenticar(){
        $username = $this->input->post("username");
        $senha = $this->input->post("senha");
        $this->load->model("login_model");
        $usuario = $this->login_model->getUser($username,$senha);
        if(isset($usuario)){
            $this->session->set_userdata("username",$usuario->getNome());
            redirect('https://kerna-karolaynedias.c9users.io/CI/login/dashboard',true);
        }else{
            //DEU PROBLEMA COM EMAIL/SENHA
            $this->session->set_userdata("msgErro","Login ou senha inválidos");
            redirect('https://kerna-karolaynedias.c9users.io/CI/login/page_login',true);
        }
    }
    
    public function dashboard(){
        $data["nome"] = $this->session->userdata("nome");
        if(isset($data["nome"])){
            $this->load->view("dashboard",$data);
        }else{
            $this->session->set_userdata("msgErro","Você precisa estar logado");
            redirect('https://kerna-karolaynedias.c9users.io/CI/login',true);
        }
    }
    
    public function logout(){
        $this->session->unset_userdata("nome");
        redirect('https://kerna-karolaynedias.c9users.io/CI/login',true);
    }
}