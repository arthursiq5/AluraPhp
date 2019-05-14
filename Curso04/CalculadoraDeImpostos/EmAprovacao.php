<?php
  class EmAprovacao{
    public function aplicaDesconto(Orcamento $orcamento){
      $orcamento->setValor($orcamento->valor - $orcamento->valor * 0.02);
    }
  }
 ?>
