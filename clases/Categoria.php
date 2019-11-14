<?php
class Categoria{

protected $id;
protected $nombre;
protected $subCategorias; //subCategorias = array de objetos

public function __construct($nombre, $mail, $contrasena){

//tendria que leer todos los objetos y buecar el mayor ID

$this->id=$ultimoId+1;

}



public function getId(){
  return $this->id;
}
public function getNombre(){
  return $this->$nombre;
}
public function getId(){
  return $this->$subCategoria;
}




private function ultimoId(){

}

}
 ?>
