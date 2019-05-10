<?php
  class RealizadorDeInvestimentos{
    protected $investimento;

    public function __construct(){
      $this->investimento = new SplDoublyLinkedList(); // declara como sendo uma lista para manter e manipular cada objeto individualmente
    }

    public function investeValor(Investimento $tipoInvestimento, $saldo){
      $this->investimento->push($tipoInvestimento); // manipula o objeto investido

      $this->investimento->top()->investir($saldo); // investe o valor

      return $this;
    }

    public function sacarValor(){
      $retorno = 0; // declara "retorno" para que exista fora do 'for'

      for($this->investimento->rewind(); $this->investimento->valid(); $this->investimento->next()){
        $retorno += $this->investimento->current()->pegarInvestimento(); // pega o conteudo de toda lista
      }

      $this->investimento = new SplDoublyLinkedList(); // zera o conteudo da lista
      return $retorno;
    }
  }
 ?>
