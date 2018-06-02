<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//rota: https://kerna-karolaynedias.c9users.io/CI/index.php/contato/page_contato
class Contato extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		/*
        * Carrega a library 'email'
        */ 
        $this->load->library('email');
        //biblioteca responsavel pela validacao
        $this->load->library('form_validation');
	}

	public function page_contato(){
        $this->load->view('contato');
	}

    public function enviaEmail(){
        
        //$this->input->post();
        
        //seta as regras de validacao dos campos
        $this->form_validation->set_rules('nome', 'Digite seu nome', 'required|trim|min_length[5]|max_length[50]');
        $this->form_validation->set_rules('email', 'Digite seu email', 'required|trim|valid_email|max_length[50]|is_unique[users.email]');
        $this->form_validation->set_rules('assunto', 'Assunto', TRUE);
        $this->form_validation->set_rules('mensagem', 'Mensagem', 'required');
        
        // run - metodo que chama as regras de validacao
        // retornando 'false' quando ocorrer erro na validacao
        // 'true' quando todas as informacoes estiverem corretas
        if ($this->form_validation->run() == FALSE){
            //variavel para repassar para a view as mensagens de erro
            $erros['msgErros'] = validation_errors();
            //carrega a view, passando para ela a variavel que contem as mensagens de validacao
            //$this->load->view('contato', $erros);
        }
        else{
            $erros['msgErros'] = null;
            echo "Formulário enviado com sucesso.";
        }
       
    $this->load->view('contato', $erros);
    }

}

