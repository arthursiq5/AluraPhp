<?php
  namespace classes\funcionarios; // definir em cada classe nova criada

  use classes\abstratas\Funcionario;
  use classes\abstratas\FuncionarioAutenticavel;

  class Diretor extends FuncionarioAutenticavel{
    public function __construct($cpf, $senha, $salario){
        $this->cpf = $cpf;
        $this->senha = $senha;
        $this->salario = $salario;
    }
    
    public function getBonificacao(){ // obrigatoria a implementacao de metodos abstratos dentro de classes-mae
      return $this->salario * 0.5;
    }
  }
 ?>
