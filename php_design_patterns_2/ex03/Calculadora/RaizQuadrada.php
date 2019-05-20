<?php
  namespace Calculadora;
  class RaizQuadrada implements Expressao{
    private $expressao;

    public function __construct(Expressao $expressao){
      $this->expressao = $expressao;
    }

    public function avalia(){
      $raiz = sqrt($this->expressao->avalia);
      return $raiz;
    }
  }
 ?>
