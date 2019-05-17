<?php

  class CalculadoraDeDescontos{
    public function calcula(Orcamento $orcamento){
      // declaracao dos objetos 'desconto'
      $descontoLapis = new DescontoVendaCasada("Lapis");
      $descontoCaneta = new DescontoVendaCasada("Caneta");
      $desconto5Itens = new Desconto5Itens();
      $desconto500Reais = new Desconto500Reais();
      $desconto300Reais = new Desconto300Reais();
      $semDesconto = new SemDesconto();

      $desconto5Itens->setProximo($desconto500Reais);
      $desconto500Reais->setProximo($descontoLapis);
      $descontoLapis->setProximo($descontoCaneta);
      $descontoCaneta->setProximo($desconto300Reais);
      $desconto300Reais->setProximo($semDesconto);

      return $desconto5Itens->calcula($orcamento);
    }
  }
 ?>
