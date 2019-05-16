<?php
  $host = "localhost";
  $user = 'root';
  $pass = '123';
  $banco = 'alura';

  $con = mysqli_connect($host, $user, $pass, $banco);

  $select = 'select * from cursos';

  var_dump($con);
 ?>
