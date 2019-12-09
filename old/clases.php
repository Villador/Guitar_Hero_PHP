<?php
if (isset($_SESSION['id'])){
	$id=$_SESSION['id'];
	$formPerfil="Formularios/perfil-usuario.php";
	$usuarioNombre= nombreUsuario($id);
	$formCarrito="carrito.php";

}else {
	$formPerfil="#";
	$formCarrito="#";
  $usuarioNombre="Perfil";
}


//Productos
require_once("funciones/funciones.php");


function productoNuevo(){
$producto=getjson('productos.json');

$ecncriptado=encripta($avatarGenerico);

$producto[]=[
'codigo'=>'1',
'categoria'=>isset($_POST['categoria']) ? $_POST['categoria']:'',
'subCategoria'=>isset($_POST['subCategoria']) ? $_POST['subCategoria']:'',
'nombre'=>isset($_POST['nombre']) ? $_POST['nombre']:'',
'nombrePrincipal'=>isset($_POST['nombrePrincipal']) ? $_POST['nombrePrincipal']:'',
'marca'=>isset($_POST['marca']) ? $_POST['marca']:'',
'logoMarca'=>'2',
'colores'=>[],
'fotos'=>[],
'descripcion'=>isset($_POST['nombre']) ? $_POST['nombre']:'',
'caracteristicas'=>isset($_POST['nombre']) ? $_POST['nombre']:'',
'especificaciones'=>isset($_POST['nombre']) ? $_POST['nombre']:'',
'precio'=>isset($_POST['nombre']) ? $_POST['nombre']:'',
];


$path="../uploads/$ecncriptado";
move_uploaded_file($avatarGenerico,$path);
putjson($users,'usuarios.json');
}



 ?>

 <!doctype html>
 <html lang="en">
   <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <title>Hello, world!</title>
   </head>
   <body>
     <div class="container-fluid">
         <!-- esto es el header -->

       <?php require_once("header.php"); ?>

       <!-- final del header -->

     </div>
     <h1>Productos</h1>

     <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>


     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </body>
 </html>