<?php
  class BancoDados{
    protected $nomeDoBanco;
    protected $endereco;
    protected $telefone;
    protected $email;
    protected $contas;

    public function __construct($nomeDoBanco, $endereco, $telefone, $email){
      $this->nomeDoBanco = $nomeDoBanco;
      $this->endereco = $endereco;
      $this->telefone = $telefone;
      $this->email = $email;
      $this->contas = new SplDoublyLinkedList();
    }

    public function __get($atributo){
      return $this->$atributo;
    }

    public function adicionaConta(ContaE $conta){
      $this->contas->push($conta);
      return $this;
    }

    public function cadastraConta($nome, $saldo = null, $agencia, $numero){
      $this->contas->push(new ContaE($nome, $saldo, $agencia, $numero));
      return $this;
    }
  }
 ?>
