<?php
  class FormatoPercent implements Formato{
    private $proximoFormato;
    public function __construct(Formato $proximo){
      $this->proximoFormato = $proximo;
    }
    public function setProximo(Formato $proximo){
      $this->proximoFormato = $proximo;
    }

    public function formataTexto($nome, $saldo, $formato){
      if($formato == 3){
        return $nome . '%' . $saldo;
      }else{
        return $this->proximoFormato->formataTexto($nome, $saldo, $formato);
      }
    }

    public function getFormato(){
      return 'Percent';
    }
  }
 ?>
