<?php
  require_once 'RealizadorDeInvestimentos.php';
  require_once 'Investimento.php';
  require_once 'Conservador.php';
  require_once 'Moderado.php';
  require_once 'Arrojado.php';

  $investimentoDoJoao = new RealizadorDeInvestimentos();
  $investimentoDoJoao->investeValor(new Arrojado(), 100);
  echo $investimentoDoJoao->sacarValor();
 ?>
