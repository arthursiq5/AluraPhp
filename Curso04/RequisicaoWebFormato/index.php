<?php
  require_once 'BancoDados.php';
  require_once 'RelatorioSimples.php';
  require_once 'RelatorioComplexo.php';

  $b = new BancoDados('Santander', 'Teutonia', '99999-9999', 'std@email.com');

  $relat = new RelatorioComplexo();

  $b->adicionaConta(new ContaE('Fulano', 500, 449468, 337));
  $b->adicionaConta(new ContaE('Batata', 250, 449468, 337));

  echo $relat->imprimeCabecalho($b);
 ?>
