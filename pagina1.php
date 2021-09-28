<?php

include_once 'includes\topPag.php';

class Login
{
    private $email;
    private $senha;
    private $nome;

    public function __construct($email,$senha,$nome){

        $this->setEmail($email);
        $this->setSenha($senha);
        $this->nome=$nome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($e){
        $email =filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email=$email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($s){
        $this->senha=$s;
    }
    
    public function Logar(){
        if($this->email=="teste@hotmail.com" and $this->senha== "123"){
            echo "Logado com sucesso";
        }
        else{
            echo "Usuario ou senha incorretos";
        }
    }
}
$logar = new Login("teste@hotmail.com","123","Rômulo");
/*
$logar->setEmail("teste@hotmail.com");
$logar->setSenha("123");
*/
echo $logar->Logar()."<br>";
echo $logar->getEmail(); 

/*
class Pessoa 
    {
        public $nome;
        public $idade;

        public function Falar(){
            echo $this->nome." de ".$this->idade." anos acabou de falar que é macho alfa<br>";
        }
    }  

$rodrigo = new Pessoa();
$rodrigo->nome="Rômulo Kennedy";
$rodrigo->idade="20";

//var_dump($rodrigo);
$rodrigo->Falar();
//echo $rodrigo->nome;



*/

include_once 'includes\lowPag.php';
?>