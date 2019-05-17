<?php
  namespace classes\abstratas;
  use classes\abstratas\Funcionario;

  abstract class FuncionarioAutenticavel extends Funcionario{
    protected $senha;

    public function autenticar($senha){
      return ($senha == $this->senha) ? true : false;
    }

  }
 ?>
