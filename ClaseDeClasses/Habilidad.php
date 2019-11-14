<?php
class Habilidad{
  private $nombre;
  private $expertise;


  public function __construct($nombre,$expertise){
    $this->nombre=$nombre;
    $this->expertise=$expertise;
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function getexpertise(){
    return $this->expertise;
  }

  public function setNombre($nombre){
    $this->nombre=$nombre;
  }
  public function setexpertise($exp){
     $this->expertise=$exp;
  }

}
 ?>
