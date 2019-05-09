<?php
  namespace classes\abstratas;

  abstract class funcionario{ // nao pode ser instanciada, apenas herdada
    protected $nome;
    protected $cpf;
    protected $salario;
    protected static $piso = 1056.00; // usado para padronizar o piso salarial

    public function __construct($cpf, $salario = null){ // o valor do salario pode ser nulo, ou seja, nao-declarado
      if($salario == null){
        $this->cpf = $cpf;
        $this->salario = $salario;
      }else{
        $this->construtor2($cpf);
      }
    }

    public function construtor2($cpf){ // como o PHP nao admite sobrecarga, e obrigatorio fazer metodos de nomes diferentes
      $this->cpf = $cpf;
      $this->salario = self::piso;
    }

    public abstract function getBonificacao(); // funcao que deve ser implementada em cada classe filha

    public final function aumentarSalario(){
      $this->salario *= 1.3;

      return $this;
    }
  }
 ?>
