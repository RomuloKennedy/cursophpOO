<?php

include_once 'includes\topPag.php';

// Modificadores de acesso;
//PUBLIC - FARÁ COM QUE NÃO HAJA OCULTAÇÃO NENHUMA.
//PRIVATE - AO CONTRÁRIO DO PUBLIC, ESSE MODIFICADOR FAZ COM QUE QUALQUER METÓDO OU PROPRIEDADE SEJA VISÍVEL SÓ E SOMENTE PELA CLASSE QUE A DECLAROU.
//PROTECTED - VISIBILIDADE PROTECTED FAZ COM QUE TODOS OS HERDEIROS VEJAM AS PROPRIEDADES OU METÓDOS PROTEGIDOS COMO SE FOSSEM PÚBLICOS.

//SÓ CONSEGUIREMOS ACESSAR OS ATRIBUTOS PROTEGIDOS APENAS USANDO FUNÇÕES " GET E SET " .
//NO MODO PRIVATE SÓ CONSEGUIREMOS ACESSAR EXCLUSIVAMENTE DENTRO DO ESCOPO DA CLASSE PRINCIPAL, OU SEJA SE ALGUMA CLASSE HERDAR OS ATRIBUTOS E TENTARMOS ACESSAR POR FORA NÃO IREMOS CONSEGUIR, ELE IRÁ CRIAR OUTRO ATRIBUTO DENTRO DA CLASSE PRINCIPAL NO MODO PUBLIC PARA PODER ATRIBUIR O VALOR ASSIM COMO DEMONSTRADO NO VAR_DUMP DO ULTIMO EXEMPLO:
class Veiculo{
  private $modelo;
  protected $cor;
  protected $ano;

  //para acessar uma função ' metodo ' private é necessário usar uma outra função public para podermos chama-lá de fora do escopo da classe.
  private function Andar(){
    echo "Andou";
  }

  public function Parar(){
    echo "Parou";
  }

  //metodo public.
  public function mostrarAcao(){
    $this->Andar();
  }

}

class Carro extends Veiculo{
 
  public function ligarLimpador(){
    echo "Limpador ligado";
  }

  public function setModelo($m){
    $this->modelo=$m;
  }
  public function getModelo(){
    echo $this->modelo;
  }

}

class Moto extends Veiculo{
  
  public function darGrau(){
    echo "Dando grau";
  }

}

$veiculo = new Carro();
$veiculo->setModelo('fiesta');
echo $veiculo->getModelo();

//EXEMPLO:
var_dump($veiculo);

$carro = new Veiculo();
//$carro->Andar();
//chamando o metódo public.
$carro->mostrarAcao();

include_once 'includes\lowPag.php';
?>