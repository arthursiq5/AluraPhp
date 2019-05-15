<?php
  require_once 'EstadoDoOrcamento.php';
  require_once 'Aprovado.php';
  require_once 'EmAprovacao.php';
  require_once 'Reprovado.php';
  require_once 'Finalizado.php';
  class Aprovado implements EstadoDoOrcamento{
    public function aplicaDesconto(Orcamento $orcamento){
      $orcamento->setValor($orcamento->getValor() - $orcamento->getValor() * 0.05);
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
