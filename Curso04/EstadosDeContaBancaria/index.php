<?php
  require_once 'Conta.php';

  $joaquim = new Conta('Joaquim');

  echo $joaquim->getSaldo() . '<br/>';
  $joaquim->depositar(50);
  echo $joaquim->getSaldo();
 ?>
