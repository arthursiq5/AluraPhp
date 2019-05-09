<?php
  namespace classes\interfaces;

  use classes\abstratas\FuncionarioAutenticavel;

  interface Autenticavel{ // todas as funcoes dentro de uma interface devem ser implementados por suas implementacoes
    public function AutentiqueAqui(FuncionarioAutenticavel $funcionario, $senha);
  }
 ?>
