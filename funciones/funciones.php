
<?php

//funcion para verificar si el email ya existe
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


function getJson($archivoJson){
  // getjson convierte en un array utilizable el archivo json_decode
  //$archivoJson es el nombre del archiv jason que tendra que decodificar
  $json=file_get_contents('../DB/' . $archivoJson);
  $users=json_decode($json,true);
  return $users;
}



function putjson($users, $archivoJson){
  //put json funcion para ingresar datos al archivo Json.
  //debe indicar  en $users el array de datos a ingresar
  //debe indicar en $archivoJson el archivo donde se incluira.
  //en esta funcion la ruta de los archivos json es siempre la misma.
  $json=json_encode($users,JSON_PRETTY_PRINT);
  $json=file_put_contents('../DB/' . $archivoJson,$json);
}


function encripta($nombreArchivo ){

//la funcion encript encriptara enombre del archivo que viene por $nombreArchivo
//y devolvera el nombre completo encriptado mas la extension del archivo original

  $ext=pathinfo($nombreArchivo, PATHINFO_EXTENSION);
  $hash=  md5(time(). pathinfo($nombreArchivo, PATHINFO_BASENAME));
  return "$hash.$ext";

// echo pathinfo('../db/usuaruios.json',PATHINFO_EXTENSION);
// echo pathinfo('../db/usuaruios.json',PATHINFO_DIRNAME);
// echo pathinfo('../db/usuaruios.json',PATHINFO_BASENAME);
}


function upload($name,$dir='../uploads'){

    if(isset($_FILES['avatar'])){

      $ecncriptado=$_FILES[$name]['name'];


      $ecncriptado=encripta($_FILES[$name]['name']);

      $path="$dir/$ecncriptado";
      move_uploaded_file($_FILES[$name]['tmp_name'],$path);

      return $path ;
    }

    return null;
}

function nombreUsuario($id1){
	$jason=file_get_contents('DB/usuarios.json');
	$usuarios=json_decode($jason,true);
// var_dump($usuarios[$id1]);
		return	$usuarios[$id1]['email'];

}

function logOut($log){
  if($log==0){

    session_unset();
    session_destroy();
    return true;


  }
  return false;
}
 ?>
