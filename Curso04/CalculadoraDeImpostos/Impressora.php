<?php
  require_once 'AcoesAoGerarNota.php';
  class Impressora implements AcoesAoGerarNota{
    public function executa(NotaFiscal $notaFiscal){
      echo '<br>Arquivo mandado para a impressora</br>';
      return $this;
    }
  }
 ?>
