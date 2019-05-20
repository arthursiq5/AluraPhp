<?php
  date_default_timezone_set('Brazil/East');
  require_once 'autoload.php';
  use Memento\Contrato;
  use Memento\Historico;

  $historico = new Historico();
  $contrato = new Contrato("Caelum", date("Y-m-d -> h:i:s"));

  $historico->addEstado($contrato->salvaEstado());
  echo '<pre>';
  var_dump($contrato);
  echo '</pre>';

  $contrato->avanca();

  $historico->addEstado($contrato->salvaEstado());
  echo '<pre>';
  var_dump($contrato);
  echo '</pre>';

  $contrato->avanca();

  $historico->addEstado($contrato->salvaEstado());
  echo '<pre>';
  var_dump($contrato);
  echo '</pre>';

  echo '<pre>';
  var_dump($historico->getEstado(0));
  echo '</pre>';
 ?>
