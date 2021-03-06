<?php
  class Desconto500Reais implements Desconto{
    private $proximoDesconto; // recebera o objeto do proximo desconto

    public function calcula(Orcamento $orcamento){
      if ($orcamento->getValor() >= 500) {

        return $orcamento->getValor() * 0.05;

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
