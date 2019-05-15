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
  echo 'ICMS+ISS+ImpostoMuitoAlto ' . $calculadora->calcula($reforma, new ImpostoMuitoAlto(new ISS)) . "<br/>";

  echo $reforma->getValor() . '<br/>';

  $reforma->aprova(); // desconto aprovado

  // $reforma->reprova() // retorna erro

  $reforma->aplicaDesconto();

  $reforma->finaliza(); // finaliza o orcamento

  // $reforma->aprova(); // retorna erro
  echo $reforma->getValor();

 ?>
