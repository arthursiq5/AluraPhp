<?php
  require_once 'Conta.php';
  require_once 'Formato.php';
  require_once 'FormatoXML.php';
  require_once 'FormatoCSV.php';
  require_once 'FormatoPercent.php';
  require_once 'FormatosExistentes.php';
  require_once 'SemFormato.php';

  class FormatadorDeTexto{
    public function formataTexto(Conta $conta, $formato){
      // inicializando
      $fXML = new FormatoXML();
      $fCSV = new FormatoCSV();
      $fPCNT = new FormatoPercent();
      $fNULL = new SemFormato();

      $fXML->setProximo($fCSV);
      $fCSV->setProximo($fPCNT);
      $fPCNT->setProximo($fNULL);

      return $fXML->formataTexto($conta->getNome(), $conta->getSaldo(), $formato);
    }
  }
 ?>
