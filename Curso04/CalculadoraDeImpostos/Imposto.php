<?php
  require_once "Orcamento.php";

  interface Imposto
  {
    public function calcula(Orcamento $orcamento);
  }

 ?>
