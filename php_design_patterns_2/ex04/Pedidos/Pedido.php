<?php
 namespace Pedidos;

 class Pedido{
   private $cliente;
   private $valor;
   private $status;
   private $dataFinalizacao;

   public function __construct($cliente, $valor){
     $this->cliente = $cliente;
     $this->valor = $valor;
     $this->status = new Novo();
   }

   public function pagar(){
     $this->status = new Pago();
     return $this;
   }

   public function finalizar(){
     $this->dataFinalizacao = date('d/m/Y');
     $this->status = new Finalizado();
   }

   public function getCliente(){
     return $this->cliente;
   }
 }
 ?>
