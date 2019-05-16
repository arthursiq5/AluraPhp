<?php
  require_once 'NotaFiscal.php';
  interface AcoesAoGerarNota{
    public function executa(NotaFiscal $notaFiscal);
  }
 ?>
