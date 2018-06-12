<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//rota: https://kerna-karolaynedias.c9users.io/CI/index.php/contato/page_contato
class Contato extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		/*
		* form_validation - biblioteca responsavel pela validacao
        * Carrega a library 'email'
        */ 
        $this->load->library(array('form_validation', 'email'));
	}

	public function page_contato(){
        $this->load->view('contato');
	}

    public function enviaEmail(){
        //seta as regras de validacao dos campos
        $this->form_validation->set_rules('name', 'Nome', 'required|min_length[3]|max_length[50]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|max_length[64]');
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
        }else{
            //recupera as informacoes do formulario
            $form_dados = $this->input->post();
            
            // Define remetente e destinatário
            $this->email->from($form_dados['email'], $form_dados['name']);
            $this->email->to('karolaynedias12@gmail.com');
            
            // Define o assunto do email
            $this->email->subject($form_dados['assunto']);
            $this->email->message('<html><head></head><body>
                Nome:       ' . $form_dados['name'] . ' <br />
                E-mail:     ' . $form_dados['email'] . ' <br />
                Assunto:    ' . $form_dados['assunto'] . ' <br />
                Mensagem:   ' . $form_dados['mensagem'] . ' <br />
            </body></html>');
            
            if ($this->email->send()) {
                $erros['enviadoSucesso'] = "Mensagem enviada com sucesso. Aguarde contato!!!";
                //echo '<script type="text/javascript">document.getElementById('form').reset()</script>';
                $this->load->view('contato', $erros);
               
                
            } else {
                $erros['msgErros'] = 'Erro ao enviar a mensagem. Por favor tentar novamente!!!';
                //$this->load->view('contato', $erros);
            }
        }
      
        $this->load->view('contato', $erros);
        
    }

}

