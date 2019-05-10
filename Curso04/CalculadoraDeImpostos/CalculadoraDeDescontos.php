<?php
  require_once "Desconto.php";
  require_once "Desconto500Reais.php";
  require_once "Desconto5Itens.php";
  require_once "SemDesconto.php";
  require_once "Desconto300Reais.php";

  class CalculadoraDeDescontos{
    public function calcula(Orcamento $orcamento){
      // declaracao dos objetos 'desconto'
      $desconto5Itens = new Desconto5Itens();
      $desconto500Reais = new Desconto500Reais();
      $desconto300Reais = new Desconto300Reais();
      $semDesconto = new SemDesconto();

      $desconto5Itens->setProximo($desconto500Reais);
      $desconto500Reais->setProximo($desconto300Reais);
      $desconto300Reais->setProximo($semDesconto);

      return $desconto5Itens->calcula($orcamento);
    }
  }
 ?>
