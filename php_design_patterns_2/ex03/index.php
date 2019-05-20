<?php
  date_default_timezone_set('Brazil/East');
  require_once 'autoload.php';
  use Calculadora\Numero;
  use Calculadora\Soma;

  $esquerdo = new Soma(new Numero(1), new Numero(3));
  $direito = new Soma(new Numero(2), new Numero(2));

  $soma = new Soma($esquerdo, $direito);

  echo $soma->avalia();
 ?>
