<?php
  namespace Calculadora;

  class Soma implements Expressao{
    private $esquerdo;
    private $direito;

    public function __construct(Expressao $esquerdo, Expressao $direito){
      $this->esquerdo = $esquerdo;
      $this->direito = $direito;
    }

    public function getEsquerda(){
      return $this->esquerdo;
    }

    public function getDireita(){
      return $this->direito;
    }

    public function avalia(){
      $valorEsquerda = $this->esquerdo->avalia(); // resolve o lado esquerdo da arvore

      $valorDireita = $this->direito->avalia(); // resolve o lado direito da arvore

      return $valorEsquerda + $valorDireita; // retorna a soma dos lados
    }

    public function aceita(Impressora $impressora){ // gatilho para a impressora agir
      $impressora->visitaSoma($this);
      return $this;
    }
  }
 ?>
