<?php
class Usuario{
    
    private $nome, $email, $senha, $id, $confsenha;
    
    public function Usuario($nome, $email, $senha, $id=0, $confsenha){
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->id = $id;
        $this->confsenha = $confirmarSenha; 
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function getSenha(){
        return $this->senha;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getConfsenha(){
        return $this->confsenha;
    }
    
    public function isValido(){
        return $this->nome != "" 
            && $this->email != ""
            && $this->senha != ""
            && $this->confsenha == $this->senha;
    }
    
    public function toArray(){
        $aux = array();
        $aux["nome"] = $this->nome;
        $aux["email"] = $this->email;
        $aux["senha"] = $this->senha;
        $aux["id"] = $this->id;
        $aux["confsenha"] = $this->confsenha;
        return $aux;
    }
    //NOME DA TABELA
    public function getClassName(){
        return "Usuario";
    }
    
}
?>