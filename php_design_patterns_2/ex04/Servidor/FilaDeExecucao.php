<?php
  namespace Servidor;

  class FilaDeExecucao{
    private $listaDeComandos;

    public function __construct(){
      $this->listaDeComandos = array();
    }

    public function add(Comando $comando){
      $this->listaDeComandos[] = $comando;
      return $this;
    }

    public function processa(){
      foreach ($this->listaDeComandos as $comando) {
        $comando->executa();
      }
      return $this;
    }
  }
 ?>
