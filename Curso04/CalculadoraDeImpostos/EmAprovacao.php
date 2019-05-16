<?php
  class EmAprovacao implements EstadoDoOrcamento{
    private $descontoAplicado = false;

    public function aplicaDesconto(Orcamento $orcamento){
      if(!$this->descontoAplicado){
        $orcamento->setValor($orcamento->getValor() - $orcamento->getValor() * 0.02);
        $this->descontoAplicado = true;
      }else{
        throw new Exception('Cada desconto so pode ser aplicado uma unica vez');
      }
    }

    public function aprova(Orcamento $orcamento){
      $orcamento->setEstado(new Aprovado());
    }

    public function reprova(Orcamento $orcamento){
      $orcamento->setEstado(new Reprovado());
    }

    public function finaliza(Orcamento $orcamento){
      throw new Exception('Apenas orcamentos aprovados podem ser finalizados');
    }
  }
 ?>
