<?php
  abstract class TemplateDadosBanco{

    public function imprimeCabecalho(BancoDados $banco, SplDoublyLinkedList $contas=null){
      return $this->cabecalho($banco) . '<br/>' . $this->dados($contas) . '<br/>' . $this->rodape($banco);
    }
  }

  protected abstract function cabecalho(BancoDados $banco);

  protected abstract function dados(BancoDados $banco);

  protected abstract function rodape(SplDoublyLinkedList $contas=null);
 ?>
