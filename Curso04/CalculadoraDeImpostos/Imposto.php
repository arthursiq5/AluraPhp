<?php
  require_once "Orcamento.php";

  abstract class Imposto
  {
    protected $outroImposto;
    function __construct(Imposto $imposto=null){
      $this->outroImposto = $imposto;
    }

    protected function calculaOutro(Orcamento $orcamento){
      if(is_null($this->outroImposto)){
        return 0;
      }else{
        return $this->outroImposto->calcula($orcamento);
      }
    }

    public abstract function calcula(Orcamento $orcamento);
  }

 ?>
