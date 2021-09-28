<?php
include_once 'includes/topPag.php';

// A classe banco é abstrata e serve de modelo para extender as outras classes.
//Ela serve somente como modelo, não podemos instacia-lá, exemplo: $banco = new Banco();  vai dar erro pois ela é abstrata

abstract class Banco{
    protected $saldo;
    protected $limiteDeSaldo;
    protected $juros;

    public function setSaldo($s){
        $this->saldo =$s;
    }

    public function getSaldo(){
        return $this->saldo;
    }
    //por termos declarados essas funções abstratas ao iniciar outra classe que herde dela, teremos também que instaciar as funções nas classes novas.
    //por termos declarado essas funções como abstratas ou seja apenas como modelo, não precisamos das chaves '{}', caso utilize retornará erro.
    abstract protected function sacar($s);
    abstract protected function depositar($d);

}
class Itau extends Banco{
    public function sacar($s){
        $this->saldo-= $s;
        echo "<hr> Sacou: ".$s;
    }

    public function depositar($d){
        $this->saldo+= $d;
        echo "<hr> Depositou: ".$d;
    }
}


$itau = new Itau();
$itau->setSaldo(1000);
echo "<hr> Saldo: ".$itau->getSaldo();
$itau->sacar(250);
echo "<br> Saldo: ".$itau->getSaldo();
$itau->depositar(800);
echo "<br> Saldo: ".$itau->getSaldo();


include_once 'includes/lowPag.php';
?>