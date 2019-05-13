<?php
  class Conta{
    private $nome;
    private $saldo;

    public function __construct($nome, $saldo){
      $this->nome = $nome;
      $this->saldo = $saldo;
    }

    public function getNome(){
      return $this->nome;
    }

    public function getSaldo(){
      return $this->saldo;
    }
  }
 ?>
