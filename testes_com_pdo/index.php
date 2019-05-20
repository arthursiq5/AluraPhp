<?php
  $user = 'arthur';
  $pswd = '123456';
  $host = 'localhost';
  $dbname = 'teste_pdo';
  try{
    $conexao = new PDO("pgsql:host=$host;dbname=$dbname;user=$user;password=$pswd"); // conecta no banco postgres

    $conexao->exec("INSERT INTO produtos (nome_produto, observacao) VALUES ('caixa', '')"); // inserindo dados com PDO
  }catch(PDOException $e){
    echo "Erro: " . $e->getMessage();
  }
 ?>
