<?php
  require_once "Orcamento.php";
  require_once "CalculadoraDeImpostos.php";
  require_once 'Imposto.php';
  require_once "CalculadoraDeDescontos.php";
  require_once "Item.php";

  $reforma = new Orcamento(1500);

  $calculadora = new CalculadoraDeImpostos();

  echo $calculadora->calcula($reforma, new ICMS()) . "<br/>";
  echo $calculadora->calcula($reforma, new ISS());

  echo "<br/>". "<br/>". "<br/>". "<br/>". "<br/>";

  echo "Testes de Descontos<br/>";

  $calculadoraDescontos = new CalculadoraDeDescontos();

  $reforma->addItem(new Item("Tijolo", 250));
  $reforma->addItem(new Item("Cimento 1Kg", 250));
  $reforma->addItem(new Item("Cimento 1Kg", 250));
  $reforma->addItem(new Item("Cimento 1Kg", 250));
  $reforma->addItem(new Item("Cimento 1Kg", 250));

  echo $calculadoraDescontos->calcula($reforma);
 ?>
