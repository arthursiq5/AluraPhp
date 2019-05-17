<?php
  class Desconto300Reais implements Desconto{
    private $proximoDesconto;

    public function calcula(Orcamento $orcamento){
      if($orcamento->getValor() >= 300){
        return $orcamento->getValor() * 0.01;
      }else{
        return $this->proximoDesconto->calcula($orcamento);
      }
    }

    public function setProximo(Desconto $proximo){
      $this->proximoDesconto = $proximo;
      return $this;
    }
  }
 ?>
