<?php

namespace App\Model;

class Produto{
    private $id, $nome, $descricao;
    
    //ID
    public function getId(){
        return $this->Id;
    }
    public function setId($Id){
        $this->Id = $Id;
    }

    //NOME
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    //Descrição
    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao($descricao){
        $this->descricao=$descricao;
    }

}

?>