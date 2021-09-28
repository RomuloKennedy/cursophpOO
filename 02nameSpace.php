<?php

include_once '00modals\produto.php';
include_once '01classes\produto.php';

//A NameSpace serve para diferenciar qual metódos vamos chamar caso ambos tenham o mesmo nome em caminhos diferentes.
//Para instanciarmos temos que declarar o namespace entre ' \ ' barras invertidas. ( o namespace foi definido nas pastas modals e classes).
$produto = new \Classes\Produto();

$produto2 = new \Modals\Produto();

$produto->mostrarDetalhes();
echo "<hr>";
$produto2->mostrarDetalhes();


//também podemos instaciarmos da seguinte forma >>
//use Classes\produto;
//também podemos adicionar um apelido >>
use Classes\produto as product;
$produto = new product();

echo "<hr>";
$produto->mostrarDetalhes();





?>