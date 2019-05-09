<?php
  class Musica{ // usada para ranquear musicas
    private $nome;
    private $vezesTocada;

    public function __construct($nome){
      $this->nome = $nome;
      $this->vezesTocada = 0;
    }

    public function getNome(){
      return $this->nome;
    }

    public function getVezesTocada(){
      return $this->vezesTocada;
    }

    public function tocar(){
      echo "Tocando musica: " . $this->nome . "<br/>"; // mostra o objeto localizado na posicao atual do ponteiro do vetor
      $this->vezesTocada++;
    }

    public function __toString(){
      return $this->nome . "";
    }
  }
 ?>
