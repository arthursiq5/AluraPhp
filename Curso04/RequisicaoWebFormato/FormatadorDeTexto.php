<?php
  class FormatadorDeTexto{
    public function formataTexto(Conta $conta, $formato){
      // inicializando
      $fNULL = new SemFormato();
      $fXML = new FormatoXML($fNULL);
      $fCSV = new FormatoCSV($fXML);
      $fPCNT = new FormatoPercent($fCSV);


      /*$fXML->setProximo($fCSV);
      $fCSV->setProximo($fPCNT);
      $fPCNT->setProximo($fNULL);*/

      return $fXML->formataTexto($conta->getNome(), $conta->getSaldo(), $formato);
    }
  }
 ?>
