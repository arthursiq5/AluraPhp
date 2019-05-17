<?php
  require_once 'Validacao.php';
  class ContaCorrente{
    private $titular;
    private $agencia;
    private $numero;
    private $saldo;

    // construtor
    public function __construct($titular, $agencia, $numero, $saldo){
      // atribuindo valor a variaveis
      Validacao::verificaNumerico($saldo);
      $this->titular = $titular;
      $this->agencia = $agencia;
      $this->numero = $numero;
      $this->saldo = $saldo;
    }

    public function sacar($valor){
      Validacao::verificaNumerico($valor);
      $this->saldo -= $valor;

      return $this; // necessario para funcoes encadeadas
    }

    public function depositar($valor){
      Validacao::verificaNumerico($valor);
      $this->saldo += $valor;

      return $this;
    }

    // metodo magico get
    // forma de uso: $classe->propriedade
    public function __get($atributo){
      Validacao::protegeAtributo($atributo);
      return $this->$atributo;
    }

    // metodo magico set
    //forma de uso: $classe->propriedade = $valor
    public function __set($atributo, $valor){
      Validacao::protegeAtributo($atributo);
      $this->$atributo = $valor;

    }

    public function setNumero($numero){
      $this->numero = $numero;

      return $this;
    }

    private function formataSaldo($saldo){
      return 'R$ ' . number_format($this->saldo, 2, ',', '.');
    }

    public function transferir($valor, ContaCorrente $conta){
      Validacao::verificaNumerico($valor);
      $this->sacar($valor);

      $conta->depositar($valor);

      return $this;
    }

    public function __toString(){
      return "O titular " . $this->titular . " possui " . $this->formataSaldo($this->saldo);
    }
  }
 ?>
