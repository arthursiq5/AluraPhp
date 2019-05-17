<?php
  function carregaClasse($nome){
    require $nome . '.php';
  }
  spl_autoload_register('carregaClasse');
  
  $reforma = new Orcamento(501);
  $investimentoDoJoao = new RealizadorDeInvestimentos();
  $investimentoDoJoao->investeValor(new Arrojado(), 100);
  echo $investimentoDoJoao->sacarValor();
 ?>
