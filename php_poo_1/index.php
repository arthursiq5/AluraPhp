<?php

  ini_set('display_errors', 1);
  error_reporting(E_ALL);


  require 'ContaCorrente.php'; // importando o pacote

  // declarando os objetos
  $contaJoao = new ContaCorrente('Joao', '1212', '343434-4', 500.00);
  $contaMaria = new ContaCorrente('Maria',  '1212', '345548-4', 1500.00);

  //$contaJoao->sacar(200)->depositar(30)->sacar(25)->depositar(412.50);
  $contaJoao->transferir(20, $contaMaria);

  echo "<pre>";
  var_dump($contaJoao);
  echo "</pre>";


  echo "<pre>";
  var_dump($contaMaria);
  echo "</pre>";

  echo $contaJoao;

  echo $contaJoao->agencia;
?>
