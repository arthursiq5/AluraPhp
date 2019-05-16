<?php
  class ContasMenosDe100Reais extends Filtro{
    public function filtra($contas){
      $contasSuspeitas = array();
      foreach ($contas as $conta) {
        if ($conta->saldo < 100) {
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
