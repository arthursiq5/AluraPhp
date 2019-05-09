<?php
  require_once 'autoload.php';
  use classes\funcionarios\Diretor; // deve ser usado ao importar classes dentro de pastas
  use classes\funcionarios\Designer;
  use classes\sistemaInterno\GerenciadorBonificacao;


  $diretor = new Diretor('000.111.222-33', '123456', 20000.00);
  $designer = new Designer('444.555.666-77');
  // $designer->modificarSalario(200);
  /*echo "<pre>";
  var_dump($diretor);
  var_dump($designer);
  echo "</pre>";*/

  echo "<pre>";
  var_dump($diretor);
  var_dump($designer);

  $designer->aumentarSalario();
  $diretor->aumentarSalario();

  var_dump($diretor);
  var_dump($designer);
  echo "</pre>";
 ?>
