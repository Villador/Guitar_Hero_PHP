<?php
class Celular{
  private $marca;
  private $modelo;
  private $proveedor;
  private $numero;


  public function __construct($marca, $modelo, $proveedor, $numero){
$this->marca=$marca;
$this->modelo=$modelo;
$this->proveedor=$proveedor;
$this->numero=$numero;

  }
  public function getMarca(){
    return $this->marca;
  }
  public function setMarca($marca){
    $this->marca=$marca;
  }

  public function getModelo(){
    return $this->modelo;
  }
  public function setModelo($modelo){
    $this->modelo=$modelo;
  }
  public function getProveedor(){
    return $this->proveedor;
  }
  public function setProveedor($proveedor){
    $this->proveedor=$proveedor;
  }
  public function getNumero(){
    return $this->numero;
  }
  public function setNumero($numero){
    $this->nnumero=$numero;
  }


}
 ?>
