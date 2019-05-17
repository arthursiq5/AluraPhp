<?php
  class Conta{
    private titular;
    private saldo;
    private dataAbertura;

    public function __construct($titular, $saldo=null){
      $this
      $this->saldo = is_null($saldo) ? 0 : $saldo;
      $this->dataAbertura = date('d/m/Y');
    }

    public function __get($attr){
      return $this->$attr;
    }

    public function depositaValor($valor){
      if((!$valor<=0) && !is_null($valor)){
        $this->saldo += $valor
      }
      return $this;
    }

    public function sacaValor($valor){
      if((!$valor<=0) && !is_null($valor)){
        $this->saldo -= $valor
      }
      return $this;
    }
  }
 ?>
