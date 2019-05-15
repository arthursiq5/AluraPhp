<?php
  require_once 'EstadoDoOrcamento.php';
  require_once 'Aprovado.php';
  require_once 'EmAprovacao.php';
  require_once 'Reprovado.php';
  require_once 'Finalizado.php';

  class EmAprovacao implements EstadoDoOrcamento{
    public function aplicaDesconto(Orcamento $orcamento){
      $orcamento->setValor($orcamento->getValor() - $orcamento->getValor() * 0.02);
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
