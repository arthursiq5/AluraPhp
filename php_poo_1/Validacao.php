<?php
  class Validacao{
    public static function protegeAtributo($atributo){
      if($atributo == 'titular' || $atributo == 'saldo'){
        throw new Exception("O atributo " . $atributo . " continua privado", 1);

      }
    }

    public static function verificaNumerico($valor){
      if(!is_numeric($valor)){
        throw new Exception("O valor nao e um numero", 1);
      }
    }
  }
 ?>
