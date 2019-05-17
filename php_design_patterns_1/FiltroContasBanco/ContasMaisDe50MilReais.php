<?php
  class ContasMaisDe50MilReais extends Filtro{
    $contasSuspeitas = array();
    foreach ($contas as $conta) {
      if ($conta->saldo > 50000) {
        array_push($contasSuspeitas, $conta);
      }
    }
    if (is_null($this->filtro)) {
      return $contasSuspeitas;
    }else{
      return array_merge($contasSuspeitas, $this->proximoFiltro());
    }
  }
 ?>
