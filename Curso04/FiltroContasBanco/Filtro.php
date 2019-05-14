<?php
  require_once 'Conta.php';

  abstract class Filtro{
    private $filtro;
    public abstract function filtra($contas);

    public function recebeFiltro(Filtro $filtro){
      $this->filtro = $filtro;
      return $this;
    }

    public function proximoFiltro($contas){
      $this->filtra($contas);
    }
  }
 ?>
