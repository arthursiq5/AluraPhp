<?php


  class Aprovado{
    public function aplicaDesconto(Orcamento $orcamento){
      $orcamento->setValor($orcamento->valor - $orcamento->valor * 0.05);
    }
  }
 ?>
