<?php
  abstract class TemplateDadosBanco{

    public final function imprimeCabecalho(BancoDados $banco){
      return $this->cabecalho($banco) . '<br/>' . $this->dados($banco) . '<br/>' . $this->rodape($banco);
    }

    protected abstract function cabecalho(BancoDados $banco);

    protected abstract function dados(BancoDados $banco);

    protected abstract function rodape(BancoDados $banco);
  }
 ?>
