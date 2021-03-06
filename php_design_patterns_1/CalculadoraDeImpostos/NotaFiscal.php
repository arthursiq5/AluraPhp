<?php
  class NotaFiscal{
    private $empresa;
    private $cnpj;
    private $itens;
    private $valorBruto;
    private $valorImpostos;
    private $observacoes;
    private $dataEmissao;

    function __construct($nomeEmpresa, $cnpj, array $itens = array(), $valorBruto, $valorImpostos, $observacoes, $dataEmissao){
      $this->empresa = $nomeEmpresa;
      $this->cnpj = $cnpj;
      $this->itens = $itens;
      $this->valorBruto = $valorBruto;
      $this->valorImpostos = $valorImpostos;
      $this->observacoes = $observacoes;
      $this->dataEmissao = $dataEmissao;
    }

    public function __get($attr){
      return $this->$attr;
    }
  }
 ?>
