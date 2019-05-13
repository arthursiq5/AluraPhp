<?php
  class BancoDados{
    protected $nomeDoBanco;
    protected $endereco;
    protected $telefone;
    protected $email;

    public function __construct($nomeDoBanco, $endereco, $telefone, $email){
      $this->nomeDoBanco = $nomeDoBanco;
      $this->endereco = $endereco;
      $this->telefone = $telefone;
      $this->email = $email;
    }

    public function __get($atributo){
      return $this->$atributo;
    }
  }
 ?>
