<?php
  class TemplateDadosBanco{

    public function imprimeCabecalho(){
      return $this->cabecalho() . '<br/>' . $this->dados() . '<br/>' . $this->rodape();
    }
  }

  public abstract function cabecalho();

  public abstract function dados();

  public abstract function rodape();
 ?>
