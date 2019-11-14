<?php
require_once("Usuario.php");
require_once("Celular.php");
require_once("Habilidad.php");

$usuario1=new Usuario("numa","numa@hotmail.com","pass");

var_dump($usuario1);

$usuario2=new Usuario("Maru","maru@hotmail.com","pass1");
var_dump($usuario2);

echo $usuario1->getEmail() . "<br>";
echo $usuario2->getEmail() . "<br>";

$usuario1->setEmail("numita@gmail.com");
$usuario2->setEmail("mariquitri@gmail.com");

echo $usuario1->getEmail() . "<br>";

echo $usuario2->getEmail() . "<br>";

echo $usuario1->saludar();

$cel1=new Celular("Movicom","Startac","entel","154443434");
$cel2=new Celular("Movicom","Startac1","entel1","154443");
var_dump($cel2);
$usuario1->setCel($cel1);
$usuario2->setCel($cel2);

var_dump($usuario2);
echo $usuario1->mostrarTelefono(). "<br>";
echo $usuario1->llamar($usuario2,3). "<br>";

 ?>
