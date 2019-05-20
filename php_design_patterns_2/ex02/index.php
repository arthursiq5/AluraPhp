<?php
  require_once 'autoload.php';
  use Memento\Contrato;

  $contrato = new Contrato("Caelum", date("Y-m-d"));

  echo '<pre>';
  var_dump($contrato);
  echo '</pre>';

  $contrato->avanca();

  echo '<pre>';
  var_dump($contrato);
  echo '</pre>';
 ?>
