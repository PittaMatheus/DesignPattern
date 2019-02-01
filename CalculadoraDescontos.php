<?php
    require_once 'Desconto5Itens.php';
    require_once 'Desconto500Reais.php';
    require_once 'SemDesconto.php';
    require_once 'Desconto300Reais.php';

    class CalculadoraDescontos{
        
        public function desconto(Orcamento $Orcamento){
            $desconto5Itens = new Desconto5Itens();
            $desconto500Reais = new Desconto500Reais();
            $semDesconto = new SemDesconto();
            $desconto300Reais = new desconto300Reais();
            $desconto5Itens->setProximo($desconto500Reais);
            $desconto500Reais->setProximo($desconto300Reais);
            $desconto300Reais->setProximo($semDesconto);
            
            $valorDoDesconto = $desconto5Itens->desconto($Orcamento);

            return $valorDoDesconto;
            
           
        }
    }
?>