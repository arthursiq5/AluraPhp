<?php

  /**
   *
   */
  class Finalizado{

    public function aplicaDesconto(Orcamento $orcamento){
      throw new Exception('Orcamentos finalizados nao podem receber descontos');
    }
  }

 ?>
