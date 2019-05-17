<?php
  class FormatoXML implements Formato{
    protected $proximoFormato;

    public function __construct(Formato $proximo){
      $this->proximoFormato = $proximo;
    }
    /*public function setProximo(Formato $proximo){
      $this->proximoFormato = $proximo;
    }*/

    public function formataTexto($nome, $saldo, $formato){
      if($formato == 1){
        return '<conta><titular>' . $nome . '</titular><saldo>' . $saldo . '</saldo></conta>';
      }else{
        return $this->proximoFormato->formataTexto($nome, $saldo, $formato);
      }
    }

    public function getFormato(){
      return 'XML';
    }
  }
 ?>
