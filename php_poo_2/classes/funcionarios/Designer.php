<?php
  namespace classes\funcionarios;

  use classes\abstratas\Funcionario;

  class Designer extends Funcionario{
    public function getBonificacao(){ // metodo sobescrito
      return $this->salario * 0.4;
    }
  }
 ?>
