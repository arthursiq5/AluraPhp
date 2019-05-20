<?php
  namespace Calculadora;
  class Numero implements Expressao{
    private $numero;

    public function __construct($inteiro){
      $this->numero = $inteiro;
    }

    public function avalia(){
      return $this->numero;
    }

    public function getNumero(){
      return $this->numero;
    }
  }
 ?>
