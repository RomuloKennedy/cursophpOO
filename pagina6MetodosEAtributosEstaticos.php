<?php

    class Login{
        public static $user;
        
        public static function verificarLogin(){
            echo "o usúario está logado!";
            echo "<br>".self::$user;
            //o $this não funciona com atributos estáticos, apenas com objetos.
            //$this->user;
        }
        public function sair(){
            echo "<hr> Saindo..";
        }
    }
    Login::$user = "Admin" ;
    //quando instaciamos uma função (metódo) estático não precisamos instaciar com uma variável, podemos chama-lá direto usando a própria classe. 
    Login::verificarLogin();
    //caso a gente tenha uma função publica que não seja estática é necessário instanciar o metódo para podermos acessa-lá.
    $login = new Login();
    $login->sair();
    
?>