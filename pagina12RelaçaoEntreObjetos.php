<?php
// Composição 
// Na composição, uma classe cria a instância de outra classe dentro de si própria, sendo assim, quando ela for destruida, a outra classe também será.
// Ao contrário da agregação, pois nela a instância é feita fora da classe.

class Pessoa{
    public function atribuirNome($nome){
        return "o nome da pessoa é: ".$nome;
    }

}
class Exibe{
    public $pessoa;
    public $nome;

    function __construct($nome){
        $this->pessoa = new Pessoa();
        $this->nome = $nome;

    }
    public function exibeNome(){
        echo $this->pessoa->atribuirNome($this->nome);
    }
}

$pessoa = new Exibe("Rômulo");
$pessoa->exibeNome();


?>