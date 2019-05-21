<?php
  namespace Data;
  class Relogio implements Data{
    public function getDia(){
      return date('d');
    }

    public function getMes(){
      return date('m');
    }
  }
 ?>
