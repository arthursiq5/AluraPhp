<?php
  class Aprovado implements EstadoDoOrcamento{
    private $descontoAplicado = false;

    public function aplicaDesconto(Orcamento $orcamento){
      if(!$this->descontoAplicado){
        $orcamento->setValor($orcamento->getValor() - $orcamento->getValor() * 0.05);
        $this->descontoAplicado = true;
      }else{
        throw new Exception('Cada desconto so pode ser aplicado uma unica vez');
      }
    }
    public function aprova(Orcamento $orcamento){
      throw new Exception('Este orcamento ja se encontra aprovado');
    }

    public function reprova(Orcamento $orcamento){
      throw new Exception('Um orcamento aprovado nao pode ser reprovado');
    }

    public function finaliza(Orcamento $orcamento){
      $orcamento->setEstado(new Finalizado());
    }
  }
 ?>
