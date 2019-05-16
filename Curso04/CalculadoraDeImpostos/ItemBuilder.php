<?php
  class ItemBuilder{
    private $nome;
    private $valor;

    public function setNome($nome){
      $this->nome = $nome;
      return $this;
    }

    public function setValor($valor){
      $this->valor = $valor;
      return $this;
    }

    public function build(){
      if(is_null($this->nome) || is_null($this->valor)) throw new Exception('Impossivel criar uma nota com atributos nulos');
      return new Item($this->nome, $this->valor); // constroi o item
    }
  }
 ?>
