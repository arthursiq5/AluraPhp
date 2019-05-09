<?php
  require "TocadorDeMusica.php";
  $musicas = new SplFixedArray(5); // cria um array de tamanho fixo

  $musicas[0] = "Gasoline";
  $musicas[1] = "Closer";
  $musicas[2] = "Rockstar";
  $musicas[3] = "Rock yourself";
  $musicas[4] = "Carry on my wayward son";

  $tocador = new TocadorDeMusica();
  $tocador->adicionarMusicas($musicas);
  $tocador->tocarMusica();
  $tocador->avancarMusica();
  $tocador->tocarMusica();
  $tocador->avancarMusica();
  $tocador->avancarMusica();
  $tocador->avancarMusica();
  $tocador->tocarUltimaMusicaTocada();

  $tocador->baixarMusicas();
?>
