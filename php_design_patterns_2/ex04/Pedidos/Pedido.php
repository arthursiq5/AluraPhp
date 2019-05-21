<?php
 namespace Pedidos;

 class Pedido{
   private $cliente;
   private $valor;
   private $status;

   public function __construct($cliente, $valor){
     $this->cliente = $cliente;
     $this->valor = $valor;
     $this->status = new Novo();
   }

   public function pagar(){
     $this->status = new Pago();
   }

   public function finalizar(){
     $this->status = new Finalizado();
   }
 }
 ?>
