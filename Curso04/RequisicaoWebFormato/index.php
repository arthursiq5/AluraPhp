<?php
  function carregaClasse($nome){
    require $nome . '.php';
  }
  spl_autoload_register('carregaClasse');
  $reforma = new Orcamento(501);

  $b = new BancoDados('Santander', 'Teutonia', '99999-9999', 'std@email.com');

  $relat = new RelatorioComplexo();

  $b->adicionaConta(new ContaE('Fulano', 500, 449468, 337));
  $b->adicionaConta(new ContaE('Batata', 250, 449468, 337));

  echo $relat->imprimeCabecalho($b);
 ?>
