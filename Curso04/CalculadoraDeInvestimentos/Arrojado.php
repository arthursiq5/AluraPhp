<?php
  class Arrojado implements Investimento{
    private $valorInvestido;

    public function investir($saldo){
      $chance = mt_rand(1, 100);

      if($chance<=20){
        $this->valorInvestido = $saldo * 1.0375; // 20% de chance de retornar 5%
      }elseif ($chance <=50) {
        $this->valorInvestido = $saldo * 1.0225; // 30% de chance de retornar 3%
      }else {
        $this->valorInvestido = ($saldo * 1.0045); // 50% de chance de retornar 0.6%
      }

      return $this;
    }

    public function pegarInvestimento(){
      return $this->valorInvestido;
    }
  }
 ?>
