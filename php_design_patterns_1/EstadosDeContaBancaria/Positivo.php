<?php
  class Positivo implements EstadoConta{
    public function saque($valor, Conta $conta){
      $conta->setSaldo($conta->getSaldo() - $valor);
      if($conta->getSaldo() < 0) $this->alteraEstado($conta);
    }

    public function deposito($valor, Conta $conta){
      $conta->setSaldo($conta->getSaldo() + ($valor * 0.98));
    }

    public function alteraEstado(Conta $conta){
      $conta->setEstado(new Negativo());
    }
  }
 ?>
