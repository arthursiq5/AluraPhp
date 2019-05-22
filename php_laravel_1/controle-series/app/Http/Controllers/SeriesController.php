<?php
  namespace app\Http\Controllers;

  class SeriesController extends Controller{
    public function listarSeries(){
      $series = [
        'Grey\s Anatomy',
        'Lost',
        'Agents of Shield'
      ];

      $html = "<ul>";
      foreach($series as $serie){
        $html .= "<li>$serie</li>";
      }
      $html .= "</ul>";

      echo $html;
    }
  }
 ?>
