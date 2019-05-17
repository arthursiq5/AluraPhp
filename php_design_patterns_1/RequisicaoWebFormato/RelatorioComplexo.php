<?php
  class RelatorioComplexo extends TemplateDadosBanco{
    protected function cabecalho(BancoDados $banco){
      return $banco->nomeDoBanco . '&emsp;' . $banco->endereco . '&emsp;' . $banco->telefone . '<br/>' . '------------------------------<br/>';
    }

    protected function dados(BancoDados $banco){
      $ans = '';
      foreach ($banco->contas as $conta) {
        $ans = $ans . $conta->nome . '&emsp;' . $conta->agencia . '&emsp;' . $conta->numero . '&emsp;' . $conta->saldo . '<br/>';
      }
      return $ans;
    }

    protected function rodape(BancoDados $banco){
      return '------------------------------<br/>' . $banco->email . '&emsp;' . date('d/m/Y');
    }
  }
 ?>
