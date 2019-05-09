<?php
  require "TocadorDeMusica.php";
  // array simples:
  //$musicas = array(`one dance`, `eagles of death metal`);
  $musicas = new SplFixedArray(2); // cria um array de tamanho fixo

  $musicas[0] = "Gasoline";
  $musicas[1] = "Closer";

  $musicas->setSize(4); // redefine o tamanho do array

  $musicas[2] = "Rockstar";
  $musicas[3] = "Rock yourself";

  $tocador = new TocadorDeMusica();
  $tocador->adicionarMusicas($musicas);

  $tocador->tocarMusica();

  $tocador->adicionarMusica("Havana");

  $tocador->avancarMusica();

  $tocador->tocarMusica();

  $tocador->mostrarMusicasTocador();

  $tocador->exibirQuantidadeMusicas();

  $tocador->removerMusicaFinalPlaylist();

  $tocador->mostrarMusicasTocador();

  $tocador->removerMusicaComecoPlaylist();

  $tocador->mostrarMusicasTocador();
?>
