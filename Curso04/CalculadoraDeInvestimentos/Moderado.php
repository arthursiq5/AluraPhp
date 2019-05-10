<?php
  require_once 'Investimento.php';

  class Moderado implements Investimento{
    private $valorInvestido;

    public function investir($saldo){
      $chance = mt_rand(1, 100);

      if($chance <= 50){
        $this->valorInvestido = ($saldo * 1.01875); // 102.5% do valor - impostos
      }else{
        $this->valorInvestido = ($saldo * 1.00525); // 100.6% do valor - impostos
      }
      return $this;
    }

    public function pegarInvestimento(){
      return $this->valorInvestido;
    }
  }
 ?>
