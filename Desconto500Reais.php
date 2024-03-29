<?php
    class Desconto500Reais implements Desconto{
        private $proximoDesconto;
        public function desconto(Orcamento $Orcamento){
            if($Orcamento->getValor() > 500){
                return $Orcamento->getValor() * 0.05;
            }else {
                return $this->proximoDesconto->desconto($Orcamento);
            }
        }
        //SETTER PARA SER INFORMADO QUAL O PROXIMO DESCONTO A SER CALCULADO
        public function setProximo(Desconto $proximo){
            $this->proximoDesconto = $proximo;
         } 
    }  
?>