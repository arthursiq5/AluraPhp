<?php
  require_once 'autoload.php';
  use Pedidos\Pedido;
  use Servidor\FilaDeExecucao;
  use Servidor\ComandoFinalizar;
  use Servidor\ComandoPagar;

  $pedido1 = new Pedido('Renan', 250);
  $pedido2 = new Pedido('Marcelo', 350);
  $pedido3 = new Pedido('Bianca', 50);
  $pedido4 = new Pedido('Caelum', 500);
  $pedido5 = new Pedido('Alura', 670);

  echo '<pre>';
  var_dump($pedido1);
  echo '</pre>';

  echo '<pre>';
  var_dump($pedido3);
  echo '</pre>';

  $fila = new FilaDeExecucao();
  $fila->
    add(new ComandoPagar($pedido1))->
    add(new ComandoPagar($pedido2))->
    add(new ComandoPagar($pedido3))->
    add(new ComandoPagar($pedido4))->
    add(new ComandoPagar($pedido5))->
    add(new ComandoFinalizar($pedido3))->
    processa();

  echo '<pre>';
  var_dump($pedido1);
  echo '</pre>';

  echo '<pre>';
  var_dump($pedido3);
  echo '</pre>';
 ?>
