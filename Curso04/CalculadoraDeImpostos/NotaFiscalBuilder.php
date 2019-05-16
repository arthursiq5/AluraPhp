<?php
  class NotaFiscalBuilder{
    // declaracao de variaveis do objeto
    private $empresa;
    private $cnpj;
    private $itens;
    private $valorBruto;
    private $valorImpostos;
    private $observacoes;
    private $dataEmissao;

    function __construct(){
      // zera o valor de todas as variaveis de instancia
      $this->valorBruto = 0;
      $this->valorImpostos = 0;

      $this->itens = array(); // gera um array pra guardar os itens
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
      $this->valorBruto += $novoItem->getValor(); // pega o valor do item
      $this->valorImpostos += $novoItem->getValor() * 0.2; // calcula 20% de imposto
      return $this;
    }

    public function comObservacoes($observacoes){
      $this->observacoes = $observacoes;
      return $this;
    }

    public function naData($data=null){
      if(is_null($data)){
        $this->dataEmissao = date('d/m/Y - h:i:s'); // se nao tiver recebido uma data, use a atual do sistema
      }else{
        $this->dataEmissao = $data; // se tiver recebido uma data, use-a
      }
    }

    public function build(){
      if(is_null($this->dataEmissao)) $this->naData(); // se possuir uma data, use-a, senao, pegue a padrao do sistema
      return new NotaFiscal($this->empresa, $this->cnpj, $this->itens, $this->valorBruto, $this->valorImpostos, $this->observacoes, ($this->dataEmissao)); // retorna uma nota fiscal completa
    }
  }
 ?>