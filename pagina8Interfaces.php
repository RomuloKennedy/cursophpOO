<?php

interface Crud {
    //os metódos das interfaces devem ser públicos.
    //Se tiver um atributo em um metódo da interface, também deve ter um parametro na classe que herda-lá. Exemplo em create().
    public function create($data); 
    public function Read();
    public function Update();
    public function Delete();
}
class Noticias implements Crud{
    public function create($data){
        //Lógica para criar uma noticia
    }
    public function Read(){
        //Lógica para ler uma noticia
    }
    public function Update(){
        //Lógica para atualziar uma noticia
    }
    public function Delete(){
        //Lógica para deletar uma noticia
    }


}


?>