<?php
  class ImpostoMuitoAlto extends Imposto{
    public function calcula(Orcamento $orcamento){
      return ($orcamento->getValor() * 0.2) + $this->calculaOutro($orcamento);
    }
  }
 ?>
