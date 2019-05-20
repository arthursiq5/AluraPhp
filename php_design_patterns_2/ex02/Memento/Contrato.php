<?php
  namespace Memento;
  class Contrato{
    private $nome;
    private $data;
    private $tipo;

    public function __construct($novoNome, $data){
      $this->nome = $novoNome;
      $this->data = $data;
      $this->tipo = new Novo();
    }

    public function setTipo(TipoDeContrato $novoTipo){
      $this->tipo = $novoTipo;
    }

    public function avanca(){
      $this->tipo->avanca($this);
    }
  }
 ?>
