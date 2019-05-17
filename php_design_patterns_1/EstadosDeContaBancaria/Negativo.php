<?php
  class Negativo implements EstadoConta{
    public function saque($valor, Conta $conta){
      throw new Exception('Nao foi possivel sacar, sua conta esta no negativo');
    }

    public function deposito($valor, Conta $conta){
      $conta->setSaldo($conta->getSaldo() + ($valor * 0.95));
      if($conta->getSaldo() >= 0) $this->alteraEstado($conta);
    }

    public function alteraEstado(Conta $conta){
      $conta->setEstado(new Positivo());
    }
  }
 ?>
