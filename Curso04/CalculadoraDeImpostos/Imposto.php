<?php
  require_once "Orcamento.php";

  abstract class Imposto
  {
    protected $outroImposto;
    function __construct(Imposto $imposto=null){
      $this->outroImposto = $imposto;
    }

    public abstract function calcula(Orcamento $orcamento);
  }

 ?>
