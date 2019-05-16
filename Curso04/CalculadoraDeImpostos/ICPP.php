<?php
  class ICPP extends TemplateDeImpostoCondicional{
    public function deveUsarOMaximo(Orcamento $orcamento){
      return $orcamento->getValor() >= 500;
    }

    public function taxacaoMinima(Orcamento $orcamento){
      return $orcamento->getValor() * 0.05;
    }

    public function taxacaoMaxima(Orcamento $orcamento){
      return $orcamento->getValor() * 0.07;
    }
  }
 ?>
