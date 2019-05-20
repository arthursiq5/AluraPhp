<?php
  namespace Memento;
  class Historico{
    private $estadosContrato;

    public function __construct(){
      $this->estadosContrato = array(); // o historico sera salvo em um array
    }

    public function getEstado($index){
      return $this->estadosContrato[$index]; // retorna a posicao 'index' do estado
    }

    public function addEstado(Estado $estado){
      $this->estadosContrato[] = $estado;
      return $this;
    }

  }
 ?>
