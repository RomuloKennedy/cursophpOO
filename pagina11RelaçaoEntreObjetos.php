<?php
// Agregação
// Na agregação, uma classe precisa da outra para executar sua ação, ou seja, uma classe utiliza a outra como parte de si própria.

class Produtos{
    public $nome;
    public $valor;

    function __construct($nome,$valor){
        $this->nome= $nome;
        $this->valor= $valor;
    }
}

class Carrinho{

    public $produtos;

    // Obrigatóriamente o parametro da classe adiciona deve ser uma instancia da classe Produtos. Isso é uma agregação.
    public function adiciona(Produtos $produto){
        $this->produtos[]= $produto;
    }
    public function exibe(){

        foreach($this->produtos as $produto){
            echo $produto->nome."<br>";
            echo $produto->valor."<hr>";
        }
    }
}

$produto1 = new Produtos("Notebook","1500");
$produto2 = new Produtos("mouse","50");

$carrinho = new Carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);

$carrinho->exibe();


?>