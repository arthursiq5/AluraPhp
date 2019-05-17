<?php
  require_once "Musica.php";
  require_once "Ranking.php";
  require_once "TocadorDeMusica.php";



  $musicas = new SplFixedArray(4);
  $musicas[0] = new Musica('One dance');
  $musicas[1] = new Musica('Gasoline');
  $musicas[2] = new Musica('Eagles of Death Metal');
  $musicas[3] = new Musica('Paranoid');

  $tocador = new TocadorDeMusica();
  $tocador->adicionarMusicas($musicas);

  $tocador->tocarMusica();
  $tocador->tocarMusica();
  $tocador->tocarMusica();
  $tocador->tocarMusica();

  $tocador->avancarMusica();

  $tocador->tocarMusica();
  $tocador->tocarMusica();

  $tocador->avancarMusica();

  $tocador->tocarMusica();
  $tocador->tocarMusica();
  $tocador->tocarMusica();

  $tocador->avancarMusica();
  $tocador->tocarMusica();

  $tocador->exibeRanking();
?>
