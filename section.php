

<?php
session_start();
require_once("funciones/funciones.php");
$usuarioNombre="perfil";



if (isset($_SESSION['id'])){
$id=$_SESSION['id'];
$formPerfil="Formularios/perfil-usuario.php";
$usuarioNombre= nombreUsuario($id);
	$formCarrito="carrito.php";
	
	if(isset($_GET['log'])){
		if (logOut($_GET['log'])){
			header('location:index.php');
		}

	}

}else {
	$formPerfil="#";
	$formCarrito="#";
}




 ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Music</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/stylessection.css">
  <link rel="stylesheet" href="css/header-footer.css">
</head>
<body>


    <header>
			<div class="container-fluid">
					<!-- esto es el header -->

				<?php require_once("header.php"); ?>

				<!-- final del header -->

			</div>

  </header>

  <section class="big">

    <div class="carousel">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="section.php"><img src="imagenes/musico-g.jpg" class="d-block w-100 img-fluid" alt="... " ></a>
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
          </div>
          <div class="carousel-item">
            <a href="section.php"><img src="imagenes/canciones-tocar-guitarra.jpg" class="d-block w-100 img-fluid" alt="..."></a>
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="carousel-item">
            <a href="section.php"><img src="imagenes/tocar-guitarra.jpg" class="d-block w-100 img-fluid" alt="..."></a>
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</section >


<section class="articulos">

<!-- <div class="container-fluid"> -->
<div class="row col-12">
	<div class="col-2">

		<section>
		<?php require_once("asaid.php"); ?>
		</section>
		<!-- esto es el ASAID -->

	</div>



<div class="col-10" style="margin-right=0px;">

	<div class="row">
	<h2>Productos</h2>
	</div>

<div class="row">

	<?php for ($i=0; $i <8 ; $i++) :?>
  <article class="col-12 col-md-6 col-xl-3" style="margin-top: 40px;">
        <div class="row text-center">
          <div class="card mx-2 " style="width: 15rem; ">
            <a href="product-page1.php"><img src="imagenes/ibanez_aeb8e_opt.jpg" class="card-img-top " alt="..."></a>
            <div class="card-body">
              <h5 class="card-title">$15.900</h5>
              <p class="card-text">Guitarra clasica.</p>
              <a href="#" class="btn btn-secondary">comprar ahora</a>
            </div>
          </div>
				</div>
</article>


	<?php endfor ?>


	</div>
	<!-- <div class="row col-12"> -->
	<!-- <h5>  Pagina anterior    siguiente Pagina  </h5> -->
	<!-- </div> -->

  </div>



</div>
  </section>

  <!-- COMIENZO FOOTER -->
  <footer>

							<?php require_once("footer.php"); ?>

  </footer>
  <!-- FINAL DEL FOOTER -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
