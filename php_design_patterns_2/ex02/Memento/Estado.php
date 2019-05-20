<?php
  namespace Memento;
  class Estado{
    private $contrato;
    private $horaGerada;

    public function __construct(Contrato $contrato){
      $this->contrato = $contrato; // encapsula o contrato selecionado
      $this->horaGerada = date("h:i:s");
    }

    public function getContrato(){
      return $this->contrato; // mostra o contrato encapsulado
    }
  }
 ?>
