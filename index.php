<?php
    require 'Imposto.php';
    require 'TemplateImpostoCondicional.php';
    require 'Desconto.php';
    require 'Desconto5Itens.php';
    require 'Desconto500Reais.php';
    require 'Desconto300Reais.php';
    require 'SemDesconto.php';
    require 'Item.php';
    require 'Orcamento.php';
    require 'CalculadoraImpostos.php';
    require 'CalculadoraDescontos.php';
    require 'ICMS.php';
    require 'ISS.php';

    // UTILIZANDO O STRATEGY PARA CALCULAR O VALOR DO IMPOSTO
    $reforma = new Orcamento(490);
    $calculadora = new CalculadoraImpostos();

    echo "<br>" . "Calculos dos impostos: ";
    echo "<br>";
    echo "ICMS: " . $calculadora->calcula($reforma, new ICMS());
    echo "<br>";
    echo "ISS: " . $calculadora->calcula($reforma, new ISS());
    echo "<br><hr>";
    echo "Testes de descontos: ";
    $calculadoraDescontos = new CalculadoraDescontos();
    echo "Desconto: ";
    $reforma->addItem(new Item("Tijolo", 250));
    $reforma->addItem(new Item("Cimento 1kg", 250));
    $reforma->addItem(new Item("Cimento 1kg", 250));
    $reforma->addItem(new Item("Cimento 1kg", 250));





    echo $calculadoraDescontos->desconto($reforma);
?>