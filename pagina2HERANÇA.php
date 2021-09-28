<?php

include_once 'includes\topPag.php';



// HERANÇA
class Veiculo{
  public $modelo;
  public $cor;
  public $ano;

  public function Andar(){
    echo "Andou";
  }

  public function Parar(){
    echo "Parou";
  }
}

class Carro extends Veiculo{
 
  public function ligarLimpador(){
    echo "Limpador ligado";
  }

}

class Moto extends Veiculo{
  
  public function darGrau(){
    echo "Dando grau";
  }

}

$sedan = new Carro();
$sedan->modelo="sedan";
$sedan->cor="preto";
$sedan->ano=2021;

echo $sedan->Andar();
var_dump($sedan);

$cbr= new Moto();
$cbr->modelo="cbr 1000rr";
$cbr->cor="preto";
$cbr->ano=2021;

var_dump($cbr);
echo $cbr->darGrau();



include_once 'includes\lowPag.php';
?>