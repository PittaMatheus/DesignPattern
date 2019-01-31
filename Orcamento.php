<?php
class Orcamento{
    private $valor;
    private $itens;
    //CONSTRUTOR PARA QUE SEMPRE HAJA UM VALOR 
    function __construct($novoValor){
        $this->valor = $novoValor;
        $this->itens = array();
    }
    public function addItem(Item $novoItem){
        $this->itens[] = $novoItem;
    }
    //GETTER PARA RECEBER O ATRIBUTO PRIVADO
    public function getValor(){
        return $this->valor;
    }
    public function getItens(){
        return $this->itens;
    }
}

?>