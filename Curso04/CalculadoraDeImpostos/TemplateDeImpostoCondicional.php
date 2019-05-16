<?php
  abstract class TemplateDeImpostoCondicional extends Imposto{
    // modelo basico de funcao de imposto
    public function calcula(Orcamento $orcamento){
      if($this->deveUsarOMaximo($orcamento)){
        return $this->taxacaoMaxima($orcamento) + $this->calculaOutro($orcamento);
      }else{
        return $this->taxacaoMinima($orcamento) + $this->calculaOutro($orcamento);
      }
    }



    // funcoes a serem implementadas pelas classes filhas
    protected abstract function deveUsarOMaximo(Orcamento $orcamento);

    protected abstract function taxacaoMinima(Orcamento $orcamento);

    protected abstract function taxacaoMaxima(Orcamento $orcamento);
  }
 ?>
