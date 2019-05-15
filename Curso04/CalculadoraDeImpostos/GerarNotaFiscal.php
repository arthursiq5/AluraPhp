<?php
  date_default_timezone_set("Brazil/East"); // definindo fuso-horario

  require_once 'NotaFiscal.php';
  require_once 'Item.php';

  $itens = array();
  $itens[] = new Item('Tijolo', 250);
  $itens[] = new Item('Cimento', 250);

  $imposto = 500 * 0.2;

  $nota = new NotaFiscal('Alura', '1234', $itens, 500, $imposto, 'tijolos', date('d/m/Y - h:i:s'));

  echo '<pre>';
  var_dump($nota);
  echo '</pre>';

  // $nomeEmpresa, $cnpj, $itens, $valorBruto, $valorImpostos, $observacoes, $dataEmissao
 ?>
