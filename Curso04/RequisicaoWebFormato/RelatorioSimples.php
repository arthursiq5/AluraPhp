<?php
  require_once 'BancoDados.php';
  require_once 'ContaE.php';
  require_once 'TemplateDadosBanco.php';

  class RelatorioSimples extends TemplateDadosBanco{
    protected abstract function cabecalho(BancoDados $banco){
      
    }

    protected abstract function dados();

    protected abstract function rodape();
  }
 ?>
