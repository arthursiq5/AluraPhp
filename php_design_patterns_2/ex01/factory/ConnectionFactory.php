<?php
namespace factory;
  class ConnectionFactory{
    public function getConnection(){
      $tipoBanco = 'postgres';
      $host = "localhost"; // como estamos usando parametros locais, a conexao sera local
      $user = 'arthur';
      $pass = '123456';
      $banco = 'alura';
      if(strcmp('postgres', $tipoBanco == 0)){
        $con = new \PDO("pgsql:host=$host; dbname=$banco; user=$user; password = $pass"); // conecta a um banco postgres
      }else if(strcmp('mysql', $tipoBanco) == 0){
        $con = 'erro';
        $con = new \PDO("mysql:host=$host; dbname=$banco; user=$user; password = $pass"); // conecta a um banco mysql
      }

      return $con; // retorna uma conexao ao postgres com os parametros acima
    }
  }
 ?>
