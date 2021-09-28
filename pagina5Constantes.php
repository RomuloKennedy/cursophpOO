<?php

class Pessoa{
    //uma constante é um valor fixo que não poderá variar, diferente de uam variável.
    const nome = "Rômulo";

    public function exibirNome(){
        //o self:: serve para acessar a constante na classe.
        echo self::nome;
        
    }
}

class Romulo extends Pessoa{
    const nome = "Kennedy";

    public function exibirNome(){
        //utilizando o parent:: conseguiremos acessar a constante da classe pai.
        echo parent::nome;
        //utilizando o self:: nós acessamos a constante dentro do escopo da classe, somente iremos conseguir acessar a constante da classe pai caso não haja constante no escopo atual.
        //echo self::nome;
    }
}

$pessoa = new Pessoa();
$pessoa->exibirNome();
echo "<hr>";
$romulo = new Romulo();
$romulo->exibirNome();
?>