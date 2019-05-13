<?php
  require_once 'FormatosExistentes.php';

  interface Formato{
    public function __construct(Formato $proximo);
    public function setProximo(Formato $proximo);
    public function formataTexto($nome, $saldo, $formato);
    public function getFormato();
  }
 ?>
