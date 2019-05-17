<?php
  // pacote para carregar automaticamente classes contidas dentro do diretorio
  function load($namespace){ // carrega a partir do namespace
    $namespace = str_replace("\\", "/", $namespace); // troca a barra '\' por '/'

    $caminhoAbsoluto = __DIR__ . "/" . $namespace . ".php"; // concatena o caminho absoluto ao namespace mencionado

    return include_once $caminhoAbsoluto; // retorna o caminho absoluto somado ao namespace
  }

  spl_autoload_register(__NAMESPACE__ . "\load");  // carrega automaticamente a classe citada pelo namespace
 ?>
