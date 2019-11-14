<?php
class Usuario {
private $nombre;
private $email;
private $contrasena;
private $celular;
private $habilidades;

  public function __construct($nombre, $mail, $contrasena){
    $this->nombre=$nombre;
    $this->email=$mail;
    $this->contrasena= $this->setPass($contrasena);
  }

  public function getNombre(){
    return $this->nombre;
  }
  public function getEmail(){
    return $this->email;
  }
  public function getContrasena(){
    return $this->contrasena;
  }

  public function setNombre($nombre){
    $this->nombre=$nombre;
  }
  public function setEmail($email){
    $this->email=$email;
  }
  public function setPass($contrasena){
    $this->contrasena= $this->encriptarPass($contrasena);
  }
  public function saludar(){
    return "Hola $this->nombre";
  }
  private function encriptarPass($password){
    return password_hash($password, PASSWORD_DEFAULT);
  }

  public function setCel(Celular $cel){
    $this->celular=$cel;
  }
  public function getCel(){
    return $this->celular;
  }
  public function mostrarTelefono(){

    return $this->celular->getMarca() . $this->celular->getModelo() . (($this->celular->getMarca()==="Movicom")? "y soy fan de iphone" : "");
  }

  public function llamar($usuariollama, $tiempo){
    if ($this->celular->getProveedor()== $usuariollama->celular->getProveedor()){
      $costo=0;

    }else {
      $costo=$tiempo*10;
    }

    return $costo;

  }
  public function addHabilidad (Habilidad $habilidad){
    $this->habilidad[]=$habilidad;
  }

}

 ?>
