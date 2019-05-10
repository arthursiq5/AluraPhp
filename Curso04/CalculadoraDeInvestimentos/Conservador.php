<?php
  require_once 'Investimento.php';

  class Conservador implements Investimento{
    private $valorInvestido;

    public function investir($saldo){
       //$this->valorInvestido = (($saldo * 0.008) * 0.75) + $saldo; // versao antiga
       $this->valorInvestido = ($saldo * 1.006); // como 0.8% de 75% da 0.6%, ja deixei esse calculo preparado pra o sistema

       return $this;
    }

    public function pegarInvestimento(){
      return $this->valorInvestido;
    }
  }
 ?>
