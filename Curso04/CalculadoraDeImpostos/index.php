<?php
  require_once "Orcamento.php";
  require_once "CalculadoraDeImpostos.php";
  require_once 'Imposto.php';

  $reforma = new Orcamento(500);

  $calculadora = new CalculadoraDeImpostos();
  echo $calculadora->calcula($reforma, new ICMS()) . "<br/>";
  echo $calculadora->calcula($reforma, new ISS());
 ?>
