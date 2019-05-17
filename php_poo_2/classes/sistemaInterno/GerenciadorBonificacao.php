<?php
  namespace classes\sistemaInterno;

  use classes\abstratas\Funcionario;
  use classes\abstratas\FuncionarioAutenticavel;

  use classes\interfaces\Autenticavel;

  class GerenciadorBonificacao implements Autenticavel{

    private $totalBonificacoes;

    private $autenticado;

    public function registrar(Funcionario $funcionario){
      if($this->autenticado){
        $this->totalBonificacoes += $funcionario->getBonificacao();
      }else{
        throw new \Exception("Voce nao esta logado!");
      }
    }

    public function AutentiqueAqui(FuncionarioAutenticavel $funcionario, $senha){
      $this->autenticado = $funcionario->autenticar($senha);

    }

    public function getTotalBonificacoes(){
      return $this->totalBonificacoes;
    }
  }
 ?>
