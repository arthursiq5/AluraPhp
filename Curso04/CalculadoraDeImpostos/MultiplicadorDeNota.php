<?php
  class MultiplicadorDeNota implements AcoesAoGerarNota{
    private $fator;
    public function __construct($fator=0){
      $this->fator = $fator;
    }

    public function executa(NotaFiscal $notaFiscal){
      echo '<br/>Valor multiplicado por ' . $this->fator . ': ' . ($notaFiscal->valorBruto * $this->fator);
      return $this;
    }
  }
 ?>
