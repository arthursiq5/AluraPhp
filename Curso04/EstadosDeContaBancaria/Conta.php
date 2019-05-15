<?php
  require_once 'Positivo.php';
  require_once 'Negativo.php';
  class Conta{
    protected $titular;
    protected $saldo;
    protected $estado;

    public function __construct($titular, $saldo=0){
      $this->titular = $titular;
      $this->saldo = $saldo;
      $this->estado = ($saldo >= 0) ? new Positivo() : new Negativo();
    }

    public function getSaldo(){
      return $this->saldo;
    }

    public function sacar($valor){
      $this->estado->saque($valor, $this);
    }

    public function depositar($valor){
      $this->estado->deposito($valor, $this);
    }
  }
 ?>
