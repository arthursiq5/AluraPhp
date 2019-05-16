<?php
  function carregaClasse($nome){
    require $nome . '.php';
  }
  spl_autoload_register('carregaClasse');
  $reforma = new Orcamento(501);

  $joaquim = new Conta('Joaquim');

  echo $joaquim->getSaldo() . '<br/>';
  $joaquim->depositar(50);
  echo $joaquim->getSaldo();
 ?>
