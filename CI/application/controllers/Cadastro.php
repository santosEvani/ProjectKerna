<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//rota: https://kerna-karolaynedias.c9users.io/CI/index.php/cadastro/page_cadastro
class Cadastro extends CI_Controller {
	
	/**
    * DESCR: O METODO FAZ ...
    * AUTOR: Evani
    * HORAS: 30s
    * ENTRADA: -
    * SAIDA: carrega a biblioteca 'form_validation' - biblioteca responsavel pela validacao,
    * e o helper 'form'
    ***/
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
        $this->load->library('form_validation');
	}
    
    /**
    * DESCR: método utilizado para chara a view 'cadastro'
    * AUTOR: Evani
    * HORAS: 1min
    * ENTRADA: -
    * SAIDA: página cadastro
    ***/
	public function page_cadastro(){
		$this->load->view('cadastro');
	}
	
	/**
    * DESCR: método utilizado para válidar senha cadastrada pelo usuário
    * AUTOR: Evani
    * HORAS: 24horas
    * ENTRADA: -
    * SAIDA: validação da senha fornecida no formulário de cadastro
    ***/
    public function validarSenha(){
        
        $senha = $this->input->post('senha');
        
        if (!preg_match("/^[a-zA-Z0-9]*$/", $senha)) {
            
            $erros['msgErros'] = "Somente letras e números são permitidos.";
            
        } else {
            return TRUE;
        }
       $this->load->view('cadastro', $erros);
    }

    /**
    * DESCR: método utilizado para válidar campos input preenchidos pelo usuário
    * no formulário cadastro
    * AUTOR: Evani
    * HORAS: 24horas
    * ENTRADA: -
    * SAIDA: validação dos campos username, email, senha e confirmar senha.
    * Após a validação os dados seja true ele continua com seu fluxo, 
    * caso erro o usuário recebe as notificações dos campos errados
    ***/
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
	
	/**
    * DESCR: método utilizado para enviar os dados para o model NovoUsuario_model.php
    * AUTOR: Evani
    * HORAS: 8horas
    * ENTRADA: -
    * SAIDA: Após a validação dos campos é inseridos no model e é chamado o método page_envioSucesso
    ***/
	public function inserir(){
        $username = $this->input->post("username");
        $email = $this->input->post("email");
        $senha = $this->input->post("senha");
        $hash = password_hash($senha,PASSWORD_DEFAULT);
        require_once APPPATH."/models/NovoUsuario_model.php";
        $novoUsuario_model = new NovoUsuario_model($username,$email,$hash);
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
