<?php
  class EnviaNotaPorEmail implements AcoesAoGerarNota{
    public function executa(NotaFiscal $notaFiscal){
      echo "<br/>Nota enviada por Email<br/>";
      return $this;
    }
  }
 ?>
