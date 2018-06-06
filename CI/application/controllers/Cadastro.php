<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//rota: https://kerna-karolaynedias.c9users.io/CI/index.php/cadastro/page_cadastro
class Cadastro extends CI_Controller {
	
		public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		/*
		* form_validation - biblioteca responsavel pela validacao
        */ 
        $this->load->library('form_validation');
	}

	public function page_cadastro(){
		$this->load->view('cadastro');
	}
	

	
	public function validarCampos(){
        
        //seta as regras de validacao dos campos
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|max_length[50]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|max_length[64]');
        $this->form_validation->set_rules('senha', 'Senha', 'required|trim|min_length[10]|max_length[10]');
        $this->form_validation->set_rules('confimarSenha', 'Confimar Senha', 'required|matches[senha]|trim|min_length[10]|max_length[10]');
        
        $this->validarSenha();

        if ($this->form_validation->run() == FALSE){
        	
        	$erros['msgErros'] = validation_errors();
            $this->load->view('cadastro', $erros);
            
        } else {
            
            echo "Cadastro realizado com sucesso.!!!";
       
        }
      
        
    }
}
