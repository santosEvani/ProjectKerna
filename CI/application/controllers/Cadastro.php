<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//rota: https://kerna-karolaynedias.c9users.io/CI/index.php/cadastro/page_cadastro
class Cadastro extends CI_Controller {

	public function page_cadastro(){
		$this->load->view('cadastro');
	}
	 public function inserir(){
        require_once APPPATH."/models/NovoUsuario.php";
        $nome = $this->input->post("nome");
        $email = $this->input->post("email");
        $senha = $this->input->post("senha");
        $usuario = new Usuario($nome,$email,$senha);
        if($usuario->isValido()){
            $this->load->model("insertdao");
            $this->insertdao->insertObject($usuario);
            redirect('https://projectx-ivync.c9users.io/ci/index.php/page_cadastro/cadastro',true);
        }else{
            $this->load->view("erro");
        }
    }
}
