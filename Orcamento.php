<?php
class Orcamento{
    private $valor;
    //CONSTRUTOR PARA QUE SEMPRE HAJA UM VALOR 
    function __construct($novoValor){
        $this->$valor = $novoValor;
    }
    //GETTER PARA RECEBER O ATRIBUTO PRIVADO
    public function getValor(){
        return $this->$valor;
    }
}

?>