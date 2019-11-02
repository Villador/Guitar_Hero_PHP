<?php
session_start();

$usuarioNombre="perfil";

function nombreUsuario($id1){
	$jason=file_get_contents('DB/usuarios.json');
	$usuarios=json_decode($jason,true);

		return	$usuarios[$id1]['email'];

}

if (isset($_SESSION['id'])){
$id=$_SESSION['id'];
$formPerfil="Formularios/perfil-usuario.php";
$usuarioNombre= nombreUsuario($id);



}else {
	$formPerfil="#";
}

 ?>









<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Producto</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/product-page-style.css">
  <link rel="stylesheet" href="css/header-footer.css">
</head>


<body>

<!-- COMIENZO DEL HEADER -->
<header>

	<div class="container-fluid">
			<!-- esto es el header -->

		<?php require_once("header.php"); ?>

		<!-- final del header -->

	</div>
</header>
  <!-- FINAL DEL HEADER -->


<!-- SECCION PRINCIPAL DE LA PAGINA -->

<div class="container-fluid">

  <section class="row">

    <div class="category-path">
      <h6>
        <ul>
          <li>
            <a href="section.html">Rubro |</a>
          </li>
          <li>
            <a href="section.html">categoria |</a>
          </li>
          <li>
            <a href="#">sub-categoria</a>
          </li>

        </ul>
      </h6>
    </div>
  </section>
  <section class="row">


        <!-- <div class="Product-details"> -->

          <div class="col-12 col-md-6">
            <section class="row">

              <div class="col-12">

                <section class="row">
                  <section class="product-photo">

                    <a href="#">
                      <img  src="imagenes/07-babasonicos-miami.jpg" alt="">
                    </a>
                  </section>
                </section>
              </div>
              <div class="col-12">
                <section class="row">

                  <section class="product-photos-min">

                      <ul>
                        <li>
                          <a href="#">
                            <img  src="imagenes/07-babasonicos-miami.jpg" alt="">
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img  src="imagenes/07-babasonicos-miami.jpg" alt="">
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img  src="imagenes/07-babasonicos-miami.jpg" alt="">
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img  src="imagenes/07-babasonicos-miami.jpg" alt="">
                          </a>
                        </li>

                      </ul>

                  </section>

                </section>

              </div>
            </section>
          </div>

        <div class="col-12 col-md-6">
          <section class="product-info">
            <div class="product-short-description">

              <div class="product-brand">
                    <a href="#"><img src="imagenes/logo-generico.png" alt="product-brand"></a>
              </div>

              <div class="product-name">
                <h1>
                  <p>
                    NOMBRE PRINCIPAL DEL PRODUCTO
                  </p>
                </h1>
              </div>

              <div class="product-stock">
                    <p>HAY STOCK

                    </p>
              </div>


              <section class="product-tipos-disp">

                  <ul>
                    <li>
                      <a href="#">
                        <img  src="imagenes/0b555fe99cdee15692b7a652889cad13.jpg" alt="">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img  src="imagenes/0b555fe99cdee15692b7a652889cad13.jpg" alt="">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img  src="imagenes/0b555fe99cdee15692b7a652889cad13.jpg" alt="">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img  src="imagenes/0b555fe99cdee15692b7a652889cad13.jpg" alt="">
                      </a>
                    </li>

                  </ul>

              </section>


              <div class="product-price">
                <p>
                  $ 21.950,00
                </p>

              </div>


            <div class="product-button-comprar">
              <a href="Formularios/carrito.html">COMPRAR</a>
            </div>

            </div>

          </section>
        </div>

        <!-- </div> -->
  </section>

  <section class="row">
        <div class="col">
          <div class="descripcion">
            <h3 class="de1">Descripcion General</h3>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

          </div>

        </div>

  </section>

  <section class="row">
        <div class="col">

          <h3 class="caracteristicas">Caracteristicas</h3>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

        </div>
        <div class="col">
          <h3 class="especficaciones">Especificaciones</h3>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

        </div>
  </section>

  <section class="row titulo-recomendados">
    <h4>Otros Productos Recomendados</h4>
  </section>


  <section class="row recomendados">

				<?php for ($i=0; $i <4 ; $i++) :?>
          <div class="col-12 col-sm-3">

            <div class="card text-center" style="width: 15rem;">
              <img src="imagenes/Metallica-Black-Album.jpg" class="card-img-top" alt="Metallica">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-dark">Comprar</a>
              </div>
            </div>
            </div>
						<?php endfor ?>

            

  </section>




</div>
<!-- FIN SECCION PRINCIPAL DE LA PAGINA -->


<!-- COMIENZO FOOTER -->
<footer>

<?php require_once("footer.php"); ?>

</footer>
<!-- FINAL DEL FOOTER -->



<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
