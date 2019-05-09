<?php
  require_once 'Album.php';
  require_once 'Musica.php';

  $albuns = new SplObjectStorage(); // criando um set pra guardar os objetos de tipo "Album"

  $divide = new Album("Divide");

  $albuns->attach($divide);

  $scorpions = new Album("Scorpions");

  $albuns->attach($scorpions);
  /*echo "<pre>";
  var_dump($albuns);
  echo "</pre>";*/

  $musicasDivide = new SplFixedArray(2);
  $musicasDivide[0] = new Musica('Shape of you');
  $musicasDivide[1] = new Musica('Castle of the hill');

  $musicasScorpions = new SplFixedArray(3);
  $musicasScorpions[0] = new Musica('Send me an angel');
  $musicasScorpions[1] = new Musica('Like a hurricane');
  $musicasScorpions[2] = new Musica('Still loving you');

  $albuns[$divide] = $musicasDivide; // usando um 'map' pra guardar os dados
  $albuns[$scorpions] = $musicasScorpions;

  foreach($albuns as $album){
    echo "<br/>Album: " . $album->getNome() . "<br/>";
    foreach ($albuns[$album] as $musica) {
      echo "Musica: " . $musica->getNome() . "<br/>";
    }
  }

 ?>
