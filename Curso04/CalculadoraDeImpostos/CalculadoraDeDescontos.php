<?php
  class CalculadoraDeDescontos{
    public function calcula(Orcamento $orcamento){
      if(count($orcamento->getItens()) > 5){
        return $orcamento->getValor() * 0.1;
      }elseif ($orcamento->getValor() > 500) {
        return $orcamento->getValor() * 0.05;
      }else{
        return 0;
      }
    }
  }
 ?>
