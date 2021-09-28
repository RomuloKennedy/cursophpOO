<?php

namespace App\Model;

//o STMT serve justamente para pegar a conexão e nos parametros aonde botamos a ' ? ' no código sql ele vai substituir usando o bindValue.

class ProdutoDao{
    public function create(Produto $p){
        $sql = 'INSERT INTO produtos(nome,descricao) VALUES(?,?)';
        //aqui utilizamos ' : ' os dois pontos por que a função getConn é um metódo static.
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1,$p->getNome());
        $stmt->bindValue(2,$p->getDescricao());
        $stmt->execute();

    }
    public function read(){
        $sql = 'SELECT * FROM produtos';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }
    }
    public function update(Produto $p){
        $sql = 'UPDATE produtos SET nome = ?, descricao =? where id = ?';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1,$p->getNome());
        $stmt->bindValue(2,$p->getDescricao());
        $stmt->bindValue(3,$p->getId() );
        $stmt->execute();
    }
    public function delete($id){
        $sql = "DELETE from produtos where id = ? ";
        $stmt =Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1,$id);
        $stmt->execute();

    }
}



?>