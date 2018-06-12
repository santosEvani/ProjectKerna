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
	
    public function validarSenha(){
        
        $senha = $this->input->post('senha');
        
        if (!preg_match("/^[a-zA-Z0-9]*$/", $senha)) {
            
            $erros['msgErros'] = "Somente letras e números são permitidos.";
            
        } else {
            return TRUE;
        }
       $this->load->view('cadastro', $erros);
    }

	public function validarCampos(){
	    
	    if($this->validarSenha() == TRUE){ 
            //seta as regras de validacao dos campos
                $this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|max_length[50]');
                $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|max_length[64]');
                $this->form_validation->set_rules('senha', 'Senha', 'required|trim|min_length[5]|max_length[10]');
                $this->form_validation->set_rules('confimarSenha', 'Confimar Senha', 'required|matches[senha]|trim');
               
                if ($this->form_validation->run() == FALSE){
                	$erros['msgErros'] = validation_errors();
                    $this->load->view('cadastro', $erros);
                } else {
                    return true;
                }
            
        } else {
            $erros['msgErros'] = validation_errors();
            $this->load->view('cadastro',$erros);
        }
	}
        
	public function inserir(){
        $username = $this->input->post("username");
        $email = $this->input->post("email");
        $senha = $this->input->post("senha");
        require_once APPPATH."/models/NovoUsuario_model.php";
        $novoUsuario_model = new NovoUsuario_model($username,$email,$senha);
        if($this->validarCampos()){
            $this->load->model("insert_model");
            $this->insert_model->insertObject($novoUsuario_model);
            redirect('https://kerna-karolaynedias.c9users.io/CI/cadastro/page_envioSucesso',true);
        }else{
            $this->load->view("cadastro");
        }
    }
    
    public function page_envioSucesso(){
		$this->load->view('envioSucesso');
	}
    
}
