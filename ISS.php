<?php
    class ISS extends TemplateImpostoCondicional{

        public function deveUsarOMaximo(Orcamento $Orcamento){
            return $Orcamento->getValor() > 300;
        }
        public function taxacaoMaxima(Orcamento $Orcamento){
            return $Orcamento->getValor() * 0.1;
        }
        public function taxacaoMinima(Orcamento $Orcamento){
            return $Orcamento->getValor() * 0.15;
        }
    }