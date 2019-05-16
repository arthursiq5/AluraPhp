<?php
  class IKCV extends TemplateDeImpostoCondicional{
    public function deveUsarOMaximo(Orcamento $orcamento){
      $i = false;

      // percorrendo o vetor de itens
      foreach ($orcamento->getItens() as $item) {
        if($item->getValor() > 100){ // se algum item for mais caro que 100, troque $i por true
          $i = true;
        }
      }
      if($i && $orcamento->getValor() > 500){
        return true;
      }else{
        return false;
      }
    }

    public function taxacaoMinima(Orcamento $orcamento){
      return $orcamento->getValor() * 0.06;
    }

    public function taxacaoMaxima(Orcamento $orcamento){
      return $orcamento->getValor() * 0.1;
    }
  }
 ?>
