<?php
/* 
-clone
-construct
-invoke
-tostring
-get
-set
*/

class Pessoa{
    private $dados= [];

    public function __set($nome,$valor){
        $this->dados[$nome] = $valor;
    }
    
    public function __get($nome){
        return $this->dados[$nome];
    }

    //quando tentarmos imprimir o metódo pessoa, esse metódo vai ser chamado.
    public function __tostring(){
        return "tentei imprimir o objeto";
    }
    //podemos chamar a instacia da class como função e retornará oque tiver no invoke.
    public function __invoke(){
        return "objeto como função";
    }
}

$pessoa = new Pessoa();
echo $pessoa->nome="Rômulo";
echo $pessoa->idade=20;
echo $pessoa->sexo="M";

var_dump($pessoa);

//tentativa de imprimir o metódo pessoa;
echo "<hr>".$pessoa;

//chamando a instancia como função.
echo "<hr>".$pessoa();


?>