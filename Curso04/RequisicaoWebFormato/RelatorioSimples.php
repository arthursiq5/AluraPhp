<?php
  require_once 'BancoDados.php';
  require_once 'ContaE.php';
  require_once 'TemplateDadosBanco.php';

  class RelatorioSimples extends TemplateDadosBanco{
    protected function cabecalho(BancoDados $banco){
      return $banco->nomeDoBanco . '&emsp;' . $banco->telefone . '<br/>' . '------------------------------<br/>';
    }

    protected function dados(BancoDados $banco){
      $ans = '';
      foreach ($banco->contas as $conta) {
        $ans = $ans . $conta->nome . '&emsp;' . $conta->saldo . '<br/>';
      }
      return $ans;
    }

    protected function rodape(BancoDados $banco){
      return '------------------------------';
    }
  }
 ?>
