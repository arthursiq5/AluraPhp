<?php
  namespace Memento;
  class EmAndamento implements TipoDeContrato{
    public function avanca(Contrato $contrato){
      $contrato->setTipo(new Finalizado());
    }
  }
 ?>
