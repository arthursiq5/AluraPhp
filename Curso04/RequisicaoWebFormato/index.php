<?php
  require_once 'FormatoXML.php';
  require_once 'FormatoPercent.php';
  require_once 'FormatoCSV.php';
  require_once 'FormatadorDeTexto.php';
  require_once 'FormatosExistentes.php';

  $formatos = new FormatosExistentes();
  $formatador = new FormatadorDeTexto();
  echo $formatador->formataTexto(new Conta('Fulano', 50), FormatosExistentes::$PERCENT);
 ?>
