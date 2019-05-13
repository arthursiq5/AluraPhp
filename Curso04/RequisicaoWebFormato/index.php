<?php
  require_once 'BancoDados.php';

  $b = new BancoDados('Santander', 'Teutonia', '99999-9999', 'std@email.com');

  echo $b->nomeDoBanco;
 ?>
