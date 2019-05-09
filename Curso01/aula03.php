<?php
  require "TocadorDeMusica.php";

  $musicas = new SplFixedArray(4);
  $musicas[0] = "One Dance";
  $musicas[1] = "Closer";
  $musicas[2] = "Rockstar";
  $musicas[3] = "Love yourself";

  $tocador = new TocadorDeMusica();

  $tocador->adicionarMusicas($musicas);
  $tocador->baixarMusicas();
 ?>
