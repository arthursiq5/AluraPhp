<?php
  require_once 'ICMS.php';
  require_once 'ISS.php';
  require_once 'Imposto.php';

  class CalculadoraDeImpostos{
    public function calcula(Orcamento $orcamento, Imposto $imposto){
      return $imposto->calcula($orcamento);
    }
  }
 ?>
