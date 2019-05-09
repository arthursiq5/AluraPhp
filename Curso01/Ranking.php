<?php
  // classe que servira pra comparar as musicas pela quantidade de vezes tocada
  class Ranking extends SplHeap{
    // implementacao de metodo abstrato da classe SplHeap
    public function compare(Musica $musica1, Musica $musica2){
      if($musica1->getVezesTocada() === $musica2->getVezesTocada()){
        return 0; // se for igual, retorna 0
      }elseif ($musica1->getVezesTocada() < $musica2->getVezesTocada()) {
        return -1; // se for menor, retorna -1
      }else{
        return 1; // se for maior, retorna 1
      }
    }

  }
 ?>
