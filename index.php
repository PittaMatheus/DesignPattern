<?php
    require 'Imposto.php';
    require 'Orcamento.php';
    require 'CalculadoraImpostos.php';
    require 'ICMS.php';
    require 'ISS.php';

    // UTILIZANDO O STRATEGY PARA CALCULAR O VALOR DO IMPOSTO
    $reforma = new Orcamento(500);
    $calculadora = new CalculadoraImpostos();

    echo $calculadora->calcula($reforma, new ICMS());
    echo "<br>";
    echo $calculadora->calcula($reforma, new ISS());
    
?>