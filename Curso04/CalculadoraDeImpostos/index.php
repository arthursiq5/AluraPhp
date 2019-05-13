<?php
  require_once "Orcamento.php";
  require_once "CalculadoraDeImpostos.php";
  require_once 'Imposto.php';
  require_once "CalculadoraDeDescontos.php";
  require_once "Item.php";
  require_once 'ICPP.php';

  $reforma = new Orcamento(501);

  $calculadora = new CalculadoraDeImpostos();

  $reforma->addItem(new Item("Tijolo", 250));
  $reforma->addItem(new Item("Cimento 1Kg", 250));

  echo 'ICMS ' . $calculadora->calcula($reforma, new ICMS()) . "<br/>";
  echo 'ISS ' . $calculadora->calcula($reforma, new ISS()) . '<br/>';
  echo 'ICPP ' . $calculadora->calcula($reforma, new ICPP) . '<br/>';
  echo 'IKCV ' . $calculadora->calcula($reforma, new IKCV) . '<br/>';
  echo 'IHIT ' . $calculadora->calcula($reforma, new IHIT);

  echo "<br/>". "<br/>". "<br/>". "<br/>". "<br/>";

  echo "Testes de Descontos<br/>";

  $calculadoraDescontos = new CalculadoraDeDescontos();



  echo $calculadoraDescontos->calcula($reforma);
 ?>
