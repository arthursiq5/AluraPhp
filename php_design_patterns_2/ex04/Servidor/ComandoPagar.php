<?php
  namespace Servidor;
  use Pedidos\Pedido;

  class ComandoPagar implements Comando{
    private $pedido;

    public function __construct(Pedido $pedido){
      $this->pedido = $pedido;
    }

    public function executa(){
      $this->pedido->pagar();
    }
  }
 ?>
