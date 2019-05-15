<?php
  require_once 'EstadoDoOrcamento.php';
  require_once 'Aprovado.php';
  require_once 'EmAprovacao.php';
  require_once 'Reprovado.php';
  require_once 'Finalizado.php';

  class Orcamento{
    private $valor;
    private $itens;
    private $estado;

    public function __construct($valor){
      $this->valor = $valor;
      $this->itens = array();
      $this->estado = new EmAprovacao();
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

    public function getEstado(){
      return $this->estado;
    }

    public function setValor($novoValor){
      $this->valor = $novoValor;
      return $this;
    }

    public function setEstado(EstadoDoOrcamento $novoEstado){
      $this->estado = $novoEstado;
      return $this;
    }

    public function aplicaDesconto(){
      $this->estado->aplicaDesconto($this);
      return $this;
    }

    public function aprova(){
      $this->estado->aprova($this);
      return $this;
    }

    public function reprova(){
      $this->estado->reprova($this);
      return $this;
    }

    public function finaliza(){
      $this->estado->finaliza($this);
      return $this;
    }
  }
 ?>
