<?php
require_once 'Imposto.php';
  abstract class TemplateDeImpostoCondicional implements Imposto{
    // modelo basico de funcao de imposto
    public function calcula(Orcamento $orcamento){
      if($this->deveUsarOMaximo($orcamento)){
        return $this->taxacaoMaxima($orcamento);
      }else{
        return $this->taxacaoMinima($orcamento);
      }
    }

    // funcoes a serem implementadas pelas classes filhas
    protected abstract function deveUsarOMaximo(Orcamento $orcamento);

    protected abstract function taxacaoMinima(Orcamento $orcamento);

    protected abstract function taxacaoMaxima(Orcamento $orcamento);
  }
 ?>
