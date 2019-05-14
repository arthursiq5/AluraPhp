<?php
  require_once 'Conta.php';

  class ContaE extends Conta{
    protected $agencia;
    protected $numero;
    public function __construct($nome, $saldo = null, $agencia, $numero){
      $this->nome = $nome;
      $this->saldo = $saldo;
      $this->agencia = $agencia;
      $this->numero = $numero;
    }

    public function __get($attr){
      return $this->$attr;
    }
  }
 ?>
