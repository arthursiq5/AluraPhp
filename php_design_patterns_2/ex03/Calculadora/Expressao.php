<?php
  namespace Calculadora;
  interface Expressao{
    public function avalia();

    public function aceita(Impressora $impressora); // gatilho para a impressora agir
  }
 ?>
