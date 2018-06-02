<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//rota: https://kerna-karolaynedias.c9users.io/CI/index.php/contato/page_contato
class Contato extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
			
	}

	public function page_contato(){
        $this->load->view('contato');
	}

    public function enviaEmail() {
        $this->load->helper('form');
        $this->load->library('email');
        
        $email = $this->input->post('email', TRUE);
        $nome = $this->input->post('nome', TRUE);
        $mensagem = $this->input->post('mensagem', TRUE);
        $assunto = $this->input->post('assunto', TRUE);

        $em = $this->email->send();
        if ($em) {
            $this->email->from($email, $nome);
            $this->email->to('karolaynedias12@gmail.com');
            $this->email->subject($assunto);
            $this->email->message('<html><head></head><body>
                Nome:       ' . $nome . ' <br />
                E-mail:     ' . $email . ' <br />
                Assunto:    ' . $assunto . ' <br />
                Mensagem:   ' . $mensagem . ' <br />
                </body></html>');
            $data['email_enviado'] = 'E-mail enviado com sucesso. Aguarde contato.';
            
           $this->load->view('contato', $data);
        } else {
            $data['email_enviado'] = 'Erro ao enviar o email. Favor enviar um e-mail para xxx@xxx.com.br';
            $this->load->view('contato', $data);
        }
        //$this->load->view('enviaEmail');
    }

}

