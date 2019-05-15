<?php
  class GeradorDeNotasFiscais{
    private $empresa;
    private $cnpj;
    private $itens;
    private $valorBruto;
    private $valorImpostos;
    private $observacoes;
    private $dataEmissao;

    function __construct(){
      $this->valorBruto = 0;
      $this->valorImpostos = 0;
      $this->itens = array();
    }
    public function comEmpresa($nomeEmpresa){
      $this->empresa = $nomeEmpresa;
      return $this;
    }

    public function comCnpj($cnpj){
      $this->cnpj = $cnpj;
      return $this;
    }

    public function addItem(Item $novoItem){
      $this->itens[] = $novoItem;
      $this->valorBruto += $novoItem->getValor();
      $this->valorImpostos += $novoItem->getValor() * 0.2;
      return $this;
    }

    public function comObservacoes($observacoes){
      $this->observacoes = $observacoes;
      return $this;
    }

    public function naData($data=null){
      if(is_null($data)){
        $this->dataEmissao = date('d/m/Y - h:i:s');
      }else{
        $this->dataEmissao = $data;
      }
    }
  }
 ?>
