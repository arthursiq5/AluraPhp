<?php
  class ContasAbertasMesAtual extends Filtro{
    public function filtra($contas){
      $contasSuspeitas = array();
      foreach ($contas as $conta) {
        $temp = explode($conta->dataAbertura);
        if (($temp[1]==date('m')) && ($temp[2] == date('Y'))) {
          array_push($contasSuspeitas, $conta);
        }
      }
      if (is_null($this->filtro)) {
        return $contasSuspeitas;
      }else{
        return array_merge($contasSuspeitas, $this->proximoFiltro());
      }
    }
  }
 ?>
