<?php
  require_once 'autoload.php';
  use factory\ConnectionFactory;

  $factory = new ConnectionFactory();

  $con = $factory->getConnection();
  

  var_dump($con);
 ?>
