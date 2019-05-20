<?php
  namespace Memento;
  class Estado{
    private $contrato;

    public function __construct(Contrato $contrato){
      $this->contrato = $contrato; // encapsula o contrato selecionado
    }

    public function getContrato(){
      return $this->contrato; // mostra o contrato encapsulado
    }
  }
 ?>
