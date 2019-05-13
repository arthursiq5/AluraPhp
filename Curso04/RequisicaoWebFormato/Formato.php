<?php
  require_once 'FormatosExistentes.php';

  interface Formato{
    public function setProximo(Formato $proximo);
    public function formataTexto($nome, $saldo, $formato);
    public function getFormato();
  }
 ?>
