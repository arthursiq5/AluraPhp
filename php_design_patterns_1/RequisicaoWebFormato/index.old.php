<?php
  function carregaClasse($nome){
    require $nome . '.php';
  }
  spl_autoload_register('carregaClasse');
  $reforma = new Orcamento(501);
  $formatos = new FormatosExistentes();
  $formatador = new FormatadorDeTexto();
  echo $formatador->formataTexto(new Conta('Fulano', 50), FormatosExistentes::$PERCENT);
 ?>
