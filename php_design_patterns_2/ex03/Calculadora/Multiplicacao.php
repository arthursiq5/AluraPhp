<?php
  namespace Calculadora;

  class Multiplicacao implements Expressao{
    private $esquerdo;
    private $direito;

    public function __construct(Expressao $esquerdo, Expressao $direito){
      $this->esquerdo = $esquerdo;
      $this->direito = $direito;
    }

    public function avalia(){
      $valorEsquerda = $this->esquerdo->avalia(); // resolve o galho esquerdo

      $valorDireita = $this->direito->avalia(); // resolve o galho direito

      return $valorEsquerda * $valorDireita;
    }
  }
 ?>
