<?php
/**
 */
class ia
{

  // Declaración de propiedad
    public $mapaFil=4;
    public $mapaCol=4;
    public $numNaves=3;
  //ARRAYS
    //Naves
    public $navesHumano=[];
    public $navesIA=[];
  //Getters
    public function getFila(){
      return $this->mapaFil;
    }
    public function getColumna(){
      return $this->mapaCol;
    }
    public function getNave(){
      return $this->numNaves;
    }
    public function getNavesIA(){
      $this->navesIA[1]["fil"]=1;
      $this->navesIA[1]["col"]=2;
      return $this->navesIA;
    }
    public function getNaveshumano(){
      return $this->navesHumano;
    }
  //Setters
    public function setMapaFil($mapaFil){
        if($mapaFil>3){
           $this->mapaFil = 3;
        }elseif ($mapaFil<0){
          $this->mapaFil = 0;
        }else{
          $this->mapaFil = $mapaFil;
        }
    }
    public function setMapaCol($mapaCol){
        if($mapaCol>3){
           $this->mapaCol = 3;
        }elseif ($mapaCol<0){
          $this->mapaCol = 0;
        }else{
          $this->mapaCol = $mapaCol;
        }
    }
    public function setNaveIA($id,$tipo,$col,$fil){
      $this->navesIA[]=[
      "id"=>$id,
      "tipo"=>$tipo,
      "fil"=>$fil,
      "col"=>$col,
    ];
    }
    public function setNavesIA($navesIA){
    return $this->navesIA = $navesIA;
    }
    public function setNaveHumana($id,$tipo,$col,$fil){
      $this->navesHumano[]=[
        "id"=>$id,
        "tipo"=>$tipo,
        "fil"=>$fil,
        "col"=>$col,
      ];
    }
  //RAMDOM
    public function randompos(){
  	$this->fila=rand(0,3);
    $this->columna=rand(0,3);
    }
  }
