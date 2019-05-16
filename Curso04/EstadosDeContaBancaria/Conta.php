<?php
  class Conta{
    private $titular;
    private $saldo;
    private $estado;

    public function __construct($titular, $saldo=0){
      $this->titular = $titular;
      $this->saldo = $saldo;
      $this->estado = ($saldo >= 0) ? new Positivo() : new Negativo();
    }

    public function setSaldo($saldo){
      $this->saldo = $saldo;
      return $this;
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

    public function setEstado(EstadoConta $estado){
      $this->estado = $estado;
      return $this;
    }
  }
 ?>
