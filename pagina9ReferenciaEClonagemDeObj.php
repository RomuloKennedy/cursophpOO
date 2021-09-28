<?php

//Referência e clonagem de objetos.

class Pessoa{
    public $idade;

    //esse metódo é inicializado quando utilizamos a palavra clone, assim como na linha 23.
    public function __clone(){
        echo "Clonagem de objetos";
    }
}

$pessoa= new Pessoa();
$pessoa->idade = 25;

$pessoa2= $pessoa;

$pessoa2->idade = 35;

echo $pessoa->idade;// aqui irá retornar 35 mesmo chamando o objeto $pessoa, porque $pessoa2 não foi instanciado e naõ é um novo objeto, é apenas uma referência do obj $pessoa.

$pessoa3= clone $pessoa;//aqui agora clonamos o objeto $pessoa, ou seja não é apenas uma referência.
$pessoa3->idade=45;

echo "<br>".$pessoa->idade; // irá retornar o resultado anterior pois $pessoa3 não é uma referência e sim um objeto clone.


?>