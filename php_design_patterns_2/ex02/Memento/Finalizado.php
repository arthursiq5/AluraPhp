<?php
  namespace Memento;
  class Finalizado implements TipoDeContrato{
    public function avanca(Contrato $contrato){
      throw new \Exception("Este contrato ja se encontra finalizado");
    }
  }
 ?>
