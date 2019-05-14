<?php
  require_once "Imposto.php";

  class ImpostoMuitoAlto extends Imposto{
    protected abstract function deveUsarOMaximo(Orcamento $orcamento);

    protected abstract function taxacaoMinima(Orcamento $orcamento);

    protected abstract function taxacaoMaxima(Orcamento $orcamento);
  }
 ?>
