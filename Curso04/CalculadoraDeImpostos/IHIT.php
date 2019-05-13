<?php
  require_once 'TemplateDeImpostoCondicional.php';

  class IHIT extends TemplateDeImpostoCondicional{
    protected function deveUsarOMaximo(Orcamento $orcamento){
      $i = false;
      for ($x=0; $x < sizeof($orcamento->getItens()); $x++) {
        for ($y=0; $y <  sizeof($orcamento->getItens()); $y++) {
          if($y == $x){
            continue;
          }elseif (strcasecmp($orcamento->getItens()[$y]->getNome(), $orcamento->getItens()[$x]->getNome())) {
            $i = true;
          }
        }
      }

      return $i;
    }

    protected function taxacaoMinima(Orcamento $orcamento){
      return count($orcamento->getItens()) *  ($orcamento->getValor() * 0.01); // retorna 1
    }

    protected function taxacaoMaxima(Orcamento $orcamento){
      return $orcamento->getValor() * 0.13 + 100;
    }
  }
 ?>
