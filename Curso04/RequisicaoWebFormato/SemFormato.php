<?php
  require_once 'Formato.php';

  class SemFormato implements Formato{
    public function __construct($proximo = null){}
    public function setProximo(Formato $proximo){
      throw new Exception("A classe nao pode chamar outros formatos");
    }

    public function formataTexto($nome, $saldo, $formato=null){
      return $nome . $saldo;
    }

    public function getFormato(){
      return 'SEM FORMATO';
    }
  }
 ?>
