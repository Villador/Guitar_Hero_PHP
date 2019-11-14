<?php
session_start();
$disabled=true;

  require_once("../funciones/funciones.php");
$foto="";


if (isset($_SESSION['id'])){

  $id = $_SESSION['id'];

  $usuarios=getJson('usuarios.json');
  $usuario=$usuarios[$id];


  if(isset($_GET['log'])){

    if($_GET['log']==0){

      session_unset();
      session_destroy();

      header('location:../index.php');

    }
  }

}



if($_POST){

  if(isset($_POST['disabled'])){

      if($_POST['disabled']=="0"){

        $disabled=false;
      }else {

        $disabled=true;
      }
  }


//primero validar los datos
  if(isset($_POST['grabar'])){

        if (! filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
          $errors['email']="Debe ingresar una direccion valida!";
        }

        //validar PASSWORD
            $email= $_POST['email'];
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];


        if(empty($errors)){

          $users=getJson('usuarios.json');

            foreach ($users as $key2 => $value) {
              if($users[$key2]['email'] === $_POST['email']){
                $id1  =$key2;
                $usuario=$users[$id1];
                // echo $usuario['nombre'];

              }
            }

            if(strlen($_FILES['avatar']['name']) != 0){
              $foto=upload('avatar');
            }else{
              $foto=$usuario['avatar'];
            }


        $users[$id1]=[
          'email'=>$_POST['email'],
          'password'=> password_hash($_POST['password'],PASSWORD_DEFAULT),
          'nombre'=>isset($_POST['nombre']) ? $_POST['nombre']:'',
          'apellido'=>isset($_POST['apellido']) ? $_POST['apellido']:'',
          'cumpleanos'=>isset($_POST['cumpleanos']) ? $_POST['cumpleanos']:'',
          'avatar'=>$foto, //upload('avatar'),

        ];


            putjson($users,'usuarios.json');


        // var_dump($_POST);
          $_SESSION['id'] = $id1; //count($users)-1;


          header('Location: perfil-usuario.php');
        }

      }

}



 ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/perfilUsuario.css">

  </head>
  <body>

    <section id="wrapper">

            <div class="container">

      <div id="content-wrapper">

      <section id="main">

            <header class="page-header">
              <h3>
      Sus datos personales
    </h3>
            </header>

      <section id="content" class="page-content">

    <form action="perfil-usuario.php" id="customer-form" class="js-customer-form" method="post" enctype="multipart/form-data">
      <section>

        <input type="hidden" name="id_customer" value="14">

      <div class="form-group row ">

        <!-- <form action="?action=perfil-usuario" method="post" enctype="multipart/form-data"> -->
            <label class="col-md-3 form-control-label">
              <a href="perfil-usuario.php?log=0">Log out</a>
            </label>

            <div class="col-md-3 form-control-valign">

                  <div class="foto">
                    <img src="<?= $usuario['avatar'] ?>" alt="avatar">

                  </div>

            </div>

            <div class="col-md-6 form-control-valign">

                  <input type="file" name="avatar">
                  <!-- <input type="submit" value="Upload Image" name="submit"> -->

            </div>
        <!-- </form> -->

        <!-- <div class="col-md-3 form-control-comment">


        </div> -->
      </div>

      <div class="form-group row ">
        <label class="col-md-3 form-control-label required">
                  Nombre
              </label>
        <div class="col-md-6">

              <input
                class="form-control"
                name="nombre"
                type="text"
                value="<?= $usuario['nombre'] ?>" <?= $disabled ? 'disabled' : '' ?>
                        >

        </div>

        <div class="col-md-3 form-control-comment">


        </div>
      </div>

      <div class="form-group row ">
        <label class="col-md-3 form-control-label required">
                  Apellidos
              </label>
        <div class="col-md-6">
              <input
                class="form-control"
                name="apellido"
                type="text"
                value="<?= $usuario['apellido'] ?>" <?= $disabled ? 'disabled' : '' ?>
                         >


        </div>

        <div class="col-md-3 form-control-comment">


        </div>
      </div>

      <div class="form-group row ">
        <label class="col-md-3 form-control-label required">
                  Correo electrónico
              </label>

        <div class="col-md-6">

              <input
                class="form-control"
                name="email"
                type="text"
                value="<?= $usuario['email'] ?>" <?= $disabled ? 'disabled' : '' ?>
                         >

        </div>

        <div class="col-md-3 form-control-comment">

        </div>
      </div>





      <div class="form-group row ">
        <label class="col-md-3 form-control-label">
                  Fecha de nacimiento (Opcional)
              </label>
        <div class="col-md-6">

              <input
                class="form-control"
                name="cumpleanos"
                type="text"
                value="<?= $usuario['cumpleanos'] ?>"
                placeholder="DD/MM/YYYY"                                  >



        </div>

        <div class="col-md-3 form-control-comment">

                    <label class="opcional "for="">(Ej:: 31/05/1970)</label>

        </div>


      </div>



<!-- Botones para grabar o editar -->
      <div class="form-group row ">

        <?php if (!$disabled): ?>
          <div class="col-md-3 form-control-label boton_editar">
            <input type="hidden" name="grabar" value="1">
            <button type="submit" class="btn btn-dark">Grabar</button>


          </div>
          <div class="col-md-3 form-control-label boton_editar">
            <input type="hidden" name="disabled" value="1">
            <button class="btn btn-dark">Cancelar Editar</button>


          </div>
          <div class="col-md-3 form-control-label boton_editar">
            <input type="hidden" name="disabled" value="0">
            <button class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">Cambiar Pass</button>

            <!-- Modal -->


          </div>


        <?php else: ?>
          <div class="col-md-9 form-control-label boton_editar">
          <input type="hidden" name="disabled" value="0">
          <button class="btn btn-dark">Editar</button>
          </div>
        <?php endif ?>

              <div class="col-md-3 " >
                <p><a href="../index.php">Volver a Home!</a></p>
              </div>

    <!-- <a href="../home.html"><h6>volver a HOME</h6></a> -->

      </div>

</section>


</form>

                      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
