<?php
  class NotaFiscalDao implements AcoesAoGerarNota{
    public function executa(NotaFiscal $notaFiscal){
      echo '<br>Arquivo salvo no banco de dados</br>';
      return $this;
    }
  }
 ?>
