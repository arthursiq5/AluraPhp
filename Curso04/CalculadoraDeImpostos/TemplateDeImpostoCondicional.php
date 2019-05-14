<?php
require_once 'Imposto.php';
  abstract class TemplateDeImpostoCondicional extends Imposto{
    // modelo basico de funcao de imposto
    public function calcula(Orcamento $orcamento){
      if($this->deveUsarOMaximo($orcamento)){
        return $this->taxacaoMaxima($orcamento) + $this->calculaOutro($orcamento);
      }else{
        return $this->taxacaoMinima($orcamento) + $this->calculaOutro($orcamento);
      }
    }

    protected function calculaOutro(Orcamento $orcamento){
      if(is_null($this->outroImposto)){
        return 0;
      }else{
        return $this->outroImposto->calcula($orcamento);
      }
    }

    // funcoes a serem implementadas pelas classes filhas
    protected abstract function deveUsarOMaximo(Orcamento $orcamento);

    protected abstract function taxacaoMinima(Orcamento $orcamento);

    protected abstract function taxacaoMaxima(Orcamento $orcamento);
  }
 ?>
