<?php
  require_once 'ICMS.php';
  require_once 'ISS.php';
  require_once 'Imposto.php';
  require_once 'ICPP.php';
  require_once 'IKCV.php';

  class CalculadoraDeImpostos{
    public function calcula(Orcamento $orcamento, Imposto $imposto){
      return $imposto->calcula($orcamento);
    }
  }
 ?>
