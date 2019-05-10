<?php
  interface Investimento{
    public function investir($saldo); // deve existir um investimento

    public function pegarInvestimento(); // o investimento deve poder ser extraido
  }

 ?>
