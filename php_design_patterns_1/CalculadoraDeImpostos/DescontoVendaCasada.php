<?php
  class DescontoVendaCasada implements Desconto{
    public $nomeDoItem;
    private $proximoDesconto;
    protected function existe(Orcamento $orcamento){
      foreach ($orcamento->getItens() as $item) {

        if(strcasecmp($item->getNome(), $this->nomeDoItem)) return true;

      }

      return false;
    }

    public function calcula(Orcamento $orcamento){
      if($this->existe($orcamento)){
        return $orcamento->getValor() * 0.05;
      }else{
        $this->proximoDesconto->calcula($orcamento);
      }
    }

    public function __construct($nomeDoItem){
      $this->$nomeDoItem = $nomeDoItem;
    }

    public function setProximo(Desconto $proximo){
      $this->proximoDesconto = $proximo;
    }
  }
 ?>
