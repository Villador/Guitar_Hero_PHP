
<?php
session_start();

$email = "";
$password = "";


function verificarUsuario($email){
  $jason=file_get_contents("../DB/usuarios.json");
  $usuarios=json_decode($jason,true);
  foreach ($usuarios as $usuario) {
    if($usuario['email'] == $email){
      return true;
    }
  }
return false;
}




if($_POST){


//validar campos
if (! filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
  $errors['email']="Debe ingresar una direccion valida!";
}else{
  if(verificarUsuario($_POST['email'])){
    $errors['email']="El usuario ya existe";
  }else{
    $email= $_POST['email'];
  }
}

//validar PASSWORD



  if($_POST['password']!=$_POST['password_confirmation']){

    $errors['password']='el password no coincide';
  }else{

    if(strlen($_POST['password'])<8){

      $errors['password']='el password debe tener mas de 8 digitos';
    }else {

        if (ctype_digit($_POST['password']{0})){
          $errors['password']='el password debe comenzar con un digito alfabetico';
        }

    }

  }


if(empty($errors)){

$json=file_get_contents('../DB/usuarios.json');
$users=json_decode($json,true);
$users[]=[
  'email'=>$_POST['email'],
  'password'=> password_hash($_POST['password'],PASSWORD_DEFAULT),
  'nombre'=>isset($_POST['nombre']) ? $_POST['nombre']:'',
  'apellido'=>isset($_POST['apellido']) ? $_POST['nombre']:'',
  'cumpleanos'=>isset($_POST['cumpleanos']) ? $_POST['nombre']:'',
  'avatar'=>"../uploads/2189.jpg" //isset($_POST['avatar']) ? $_POST['nombre']:'',
];


$json=json_encode($users,JSON_PRETTY_PRINT);
$json=file_put_contents('../DB/usuarios.json',$json);

// var_dump($_POST);
// envio a pagina de perfil del usuario

$_SESSION['id'] = count($users)-1;
header("location: perfil-usuario.php");

}
}

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrate!</title>
    <link rel="stylesheet" href="registro.css">

    <!-- //tendria que loguear?
    //abrir la pagina del perfil -->

</head>
<body>

<form action="registro.php" method="post">
  <div class="container">
    <h1>Registro</h1>
    <p>Completá el formulario para registrarte!</p>
    <hr>

    <div class="row">


  



    <label for="email"><b>Email     </b><span style="color: red">    <?=$errors['email']?></span></label>
    <input type="text" placeholder="ejemplo: nombre@dominio.com" name="email" value="<?=$email?>" required>




    <label for="psw"><b>Password</b><span style="color: red">    <?=$errors['password']?></span></label>
    <input type="password" placeholder="Ingresá tu password" name="password" value="" required>

    <label for="psw-repeat"><b>Repetir Password</b><span style="color: red">    <?=$errors['email']?? ''?></span></label>
    <input type="password" placeholder="Repetí tu password" name="password_confirmation" value="" required>



  </div>
  <!-- //  <div class="row errores">



//    </div> -->


    <hr>

    <p>Al crear tu cuenta, aceptas estar de acuerdo con nuestros <a href="terminos.php">Términos y condiciones</a>.</p>
    <!-- <button type="submit" class="registerbtn">Registrate!</button> -->
    <button class="registerbtn">Registrate!</button>

    <div class="container signin">
      <p>Ya tenes tu cuenta? <a href="login.php">Logueate acá!</a>.</p>
    </div>

    <div class="container signin">
      <p><a href="../index.php">Volver al Home!</a></p>
    </div>



  </div>


</form>

</body>
