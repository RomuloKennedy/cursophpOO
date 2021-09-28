<?php

/*
use Cocur\Slugify\Slugify;

$slugify = new Slugify();
$slugify->addRule('de','do');

echo $slugify->slugify('teste com acentuação para geração de conteúdo','_');
*/

require_once "vendor\autoload.php";


$produto = new \App\Model\Produto();
$produto->setId(8);
$produto->setNome("cadeira");
$produto->setDescricao("Gamer");

$produtoDao = new \App\Model\ProdutoDao();
$produtoDao->delete(5);

$produtoDao->read();

foreach($produtoDao->read() as $produto){
    echo $produto['nome'].'<br>'.$produto['descricao'].'<hr>';
}
?>