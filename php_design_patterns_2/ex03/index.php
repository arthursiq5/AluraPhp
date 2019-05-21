<?php
  date_default_timezone_set('Brazil/East');
  require_once 'autoload.php';
  use Calculadora\Numero;
  use Calculadora\Soma;
  use Calculadora\Subtracao;
  use Calculadora\Multiplicacao;
  use Calculadora\Divisao;
  use Calculadora\Impressora;

  $esquerdo = new Soma(new Numero(1), new Numero(3));
  $direito = new Subtracao(new Multiplicacao(new Numero(3), new Numero(5)), new Numero(2));

  $soma = new Soma($esquerdo, $direito);

  $impressora = new Impressora();
  echo '<br/>' . $soma->aceita($impressora)->avalia(); // imprimindo o calculo e seu resultado com funcoes encadeadas
 ?>
