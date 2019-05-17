<?php
    require_once "Musica.php";
    require_once "Ranking.php";

    class TocadorDeMusica{

      private $musicas;

      public function __construct(){
        $this->musicas = new SplDoublyLinkedList();
        $this->historico = new SplStack(); // construindo uma pilha
        $this->filaDeDownloads = new SplQueue();
        $this->musicas->rewind();

        $this->ranking = new Ranking();
      }

      public function adicionarMusicas(SplFixedArray $musicas){
        /*
        Explicacao do "for":
        metodo 'rewind' - leva o ponteiro para o inicio do array
        metodo 'valid' - verifica se a posicao e valida
        metodo 'next' - passa o ponteiro para a proxima posicao
        */
        for($musicas->rewind();  $musicas->valid(); $musicas->next()){
          $this->musicas->push(new Musica($musicas->current()));
        }

        $this->musicas->rewind(); // volta o ponteiro para o inicio do array
      }

      public function tocarMusica(){
        if($this->musicas->count() === 0){
          echo "Erro, sem musicas no tocador <br/>";
        }else{
        $this->historico->push($this->musicas->current()); // adicionando uma musica a pilha
        $this->musicas->current()->tocar();
        }
      }

      public function tocarUltimaMusicaTocada(){
        echo "Tocando do historico: ". $this->historico->pop() . "<br/>"; // removendo a ultima musica adicionada na pilha e a mostrando ao usuario
      }

      public function adicionarMusica($musica){ // adiciona no final da playlist
        $this->musicas->push($musica); // metodo 'push' adiciona o dado selecionado no array
        if(!$this->musicas->valid()){
          $this->musicas->rewind();
        }
      }

      public function adicionarMusicaComecoPlaylist($musica){
        $this->musicas->unshift($musica);
      }

      public function removerMusicaComecoPlaylist(){
        $this->musicas->shift();
      }

      public function removerMusicaFinalPlaylist(){
        $this->musicas->pop();
      }

      public function voltarMusica(){
        $this->musicas->prev();
        if(!$this->musicas->valid()){
          $this->musicas->rewind();
        }
      }

      public function avancarMusica(){ // se puder, avanca uma musica, senao, volta pra o comeco
        $this->musicas->next();
        if(!$this->musicas->valid()){
          $this->musicas->rewind();
        }
      }

      public function mostrarMusicasTocador(){
        $msc = $this->musicas;
        echo "Mostrando todas as musicas disponiveis: <br/>";
        for ($msc->rewind(); $msc->valid() ; $msc->next()) {
          echo "<br/>" . $msc->current();
        }
        echo "<br/>";
      }

      public function exibirQuantidadeMusicas(){
        echo "Existem " . $this->musicas->count() . " musicas no tocador <br/>";
      }

      public function baixarMusicas(){
        if($this->musicas->count() > 0){
          for($this->musicas->rewind(); $this->musicas->valid(); $this->musicas->next()){
            $this->filaDeDownloads->push($this->musicas->current());
          }

          for($this->filaDeDownloads->rewind(); $this->filaDeDownloads->valid(); $this->filaDeDownloads->next()){
            echo "Baixando: " . $this->filaDeDownloads->current() . "...<br/>";
          }
        }else{
          echo "Sem musicas para baixar<br/>";
        }
      }

      public function exibeRanking(){
        foreach ($this->musicas as $musica) {
          $this->ranking->insert($musica);
        }

        foreach ($this->ranking as $musica) {
          echo $musica->getNome() . " - " . $musica->getVezesTocada() . "<br/>";
        }
      }
    }
?>
