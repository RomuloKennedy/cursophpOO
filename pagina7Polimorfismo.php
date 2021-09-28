<?php 

class Animal{
    //método que foi alterado.
    public function Andar(){
        echo "O Animal andou";
    }
    public function Correu(){
        echo "O animal correu!";
    }
}

class Cavalo extends Animal{
    //polimorfismo é simplesmente a gente rescrever ou modificar uma função (método) herdado da classe pai.
    public function Andar(){
        $this->Correu();
        // echo "O Cavalo Andou!";
    }

}
$animal = new Cavalo();
$animal->Andar();


?>