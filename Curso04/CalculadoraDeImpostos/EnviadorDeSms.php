<?php
  class EnviadorDeSms implements AcoesAoGerarNota{
    public function executa(NotaFiscal $notaFiscal){
      echo "<br/>Enviei o SMS<br/>";
      return $this;
    }
  }
 ?>
