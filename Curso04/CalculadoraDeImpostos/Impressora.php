<?php
  class Impressora{
    public function imprimir(NotaFiscal $notaFiscal){
      echo '<br>Arquivo mandado para a impressora</br>';
      return $this;
    }
  }
 ?>
