<?php
    class CalculadoraDescontos{
        
        public function desconto(Orcamento $Orcamento){
            $desconto = new Desconto5Itens();
            $valorDoDesconto = $desconto->desconto($Orcamento);
            if($valorDoDesconto == 0){
                $desconto = new Desconto500Reais();
                return $desconto->desconto($Orcamento);
            }
           
        }
    }
?>