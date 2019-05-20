<?php
  namespace Memento;
  class Contrato{
    private $nome;
    private $data;
    private $tipo;

    public function __construct($novoNome, $data, $tipo = null){
      $this->nome = $novoNome;
      $this->data = $data;
      $this->tipo = is_null($tipo) ? new Novo() : $tipo; // se o tipo nao for nulo, usa o tipo passado, senao cria um novo objeto 'Novo'
    }

    public function setTipo(TipoDeContrato $novoTipo){
      $this->tipo = $novoTipo;
    }

    public function avanca(){
      $this->tipo->avanca($this);
    }

    public function salvaEstado(){
      return new Estado(new Contrato($this->nome, $this->data, $this->tipo));
    }
  }
 ?>
