<?php
  namespace Servidor;
  use Pedidos\Pedido;

  class ComandoFinalizar implements Comando{
    private $pedido;

    public function __construct(Pedido $pedido){
      $this->pedido = $pedido;
    }

    public function executa(){
      echo 'Finalizando o pedido do cliente: ' . $this->pedido->getCliente() . '<br/>';
      $this->pedido->finalizar();
    }
  }
 ?>
