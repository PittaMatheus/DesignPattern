<?php

    class CalculadoraImpostos{
        public function calcula(Orcamento $Orcamento, Imposto $imposto){
            return $imposto->calcula($Orcamento);
        }
    }
?>