<?php
  require_once 'Conta.php';
  interface EstadoConta{
    public function saque($valor, Conta $conta);

    public function deposito($valor, Conta $conta);

    public function alteraEstado(Conta $conta);
  }
 ?>
