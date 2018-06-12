<?php
class NovoUsuario_model{
    
    private $username, $email, $senha, $id;
    
    public function NovoUsuario_model($username, $email, $senha,$id=0){
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->senha = $senha;
    }
    
    public function getNome(){
        return $this->username;
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
    
    public function toArray(){
        $aux = array();
        $aux["id"] = $this->id;
        $aux["nome"] = $this->username;
        $aux["email"] = $this->email;
        $aux["senha"] = $this->senha;
        return $aux;
    }
 
    public function getClassName(){
        return "Usuario";
    }
    
}
?>