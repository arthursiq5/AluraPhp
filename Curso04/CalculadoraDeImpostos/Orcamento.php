<?php
  class Orcamento{
    private $valor;
    private $itens;

    public function __construct($valor){
      $this->valor = $valor;
      $this->itens = array();
    }

    public function addItem(Item $novoItem){
      $this->itens[] = $novoItem;
    }

    public function getItens(){
      return $this->itens;
    }

    public function getValor(){
      return $this->valor;
    }
  }
 ?>
