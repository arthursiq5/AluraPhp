<?php

  /**
   *
   */
  class Reprovado{

    public function aplicaDesconto(Orcamento $orcamento){
      throw new Exception('Orcamentos reprovados nao podem receber descontos');
    }
  }

 ?>
