<?php
  require_once "Desconto.php";

  class SemDesconto implements Desconto{
    public function calcula(Orcamento $orcamento){
      return 0;
    }

    public function setProximo(Desconto $desconto){
      throw new Exception("Ao chegar nessa classe nao e mais possivel definir uma proxima etapa");
    }
  }
 ?>
