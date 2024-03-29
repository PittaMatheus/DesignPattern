<?php
    class Desconto5Itens implements Desconto{
        private $proximoDesconto;
        public function desconto(Orcamento $Orcamento){
            if(count($Orcamento->getItens()) >= 5){
                return $Orcamento->getValor() * 0.1;
            }else{
                return $this->proximoDesconto->desconto($Orcamento);
            }
        }
        //SETTER PARA SER INFORMADO QUAL O PROXIMO DESCONTO A SER CALCULADO
        public function setProximo(Desconto $proximo){
            $this->proximoDesconto = $proximo;
        }
    }

?>