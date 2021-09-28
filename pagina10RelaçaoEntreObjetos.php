<?php
// Relação Entre Os Objetos (Associação)
// Acontece quando um objeto "utiliza" outro, porém, sem que eles dependam um do outro.

class Pedido{
    public $numero;
    public $cliente;

}

class Cliente{
    public $nome;
    public $endereco;
}

$cliente = new Cliente();
$cliente->nome = "Rômulo Kennedy";
$cliente->endereco="Avenida br 101,n° 10";

$pedido = new Pedido();
$pedido->numero="123";
//é aqui onde é feita a associação >>
$pedido->cliente = $cliente;

$dados = ["n° pedido"=>$pedido->numero,"nome_cliente"=>$pedido->cliente->nome,"endereç_cliente"=>$pedido->cliente->endereco];

var_dump($dados);
print_r($dados);
?>