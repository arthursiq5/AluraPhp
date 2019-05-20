<?php
  namespace Calculadora;

  class Impressora{
    public function visitaNumero(Numero $numero){
      echo $numero->getNumero();
      return $this;
    }

    public function visitaSoma(Soma $soma){
      echo "(";
      // esquerda
      echo " + ";
      // direita
      echo ")";
    }

    public function visitaSubtracao(Subtracao $subtracao){
      echo "(";
      // esquerda
      echo " - ";
      // direita
      echo ")";
    }

    public function visitaMultiplicacao(Multiplicacao $multiplicacao){
      echo "(";
      // esquerda
      echo " * ";
      // direita
      echo ")";
    }

    public function visitaDivisao(Divisao $divisao){
      echo "(";
      // esquerda
      echo " / ";
      // direita
      echo ")";
    }
  }
 ?>
