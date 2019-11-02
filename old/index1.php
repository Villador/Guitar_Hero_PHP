<?php
session_start();

$usuarioNombre="perfil";
// var_dump($_COOKIE['remember']);

function nombreUsuario($id1){
	$jason=file_get_contents('DB/usuarios.json');
	$usuarios=json_decode($jason,true);
// var_dump($usuarios[$id1]);
		return	$usuarios[$id1]['email'];

}


if (isset($_COOKIE['remember'])){
	$id=$_SESSION['id'];
	$formPerfil="Formularios/perfil-usuario.php";
	$usuarioNombre= nombreUsuario($id);
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
						<title>Home</title>
						<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	                        <link rel="stylesheet" href="css/header-footer.css">
                        <link rel="stylesheet" href="css/home.css">
					</head>
					<body>
					<div class="contenedor">
					<header>

					<div class="container-fluid">
							<!-- esto es el header -->

						<?php include("header.php"); ?>

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
						</section class="articulos">

					<div class="row col-12">
						<div class="col-2">
							<section>

								<?php include("asaid.php"); ?>
							</section>
						</div>

						<div class="col-10" style="margin-right=0px;">


							<section class="ofertas" style="padding-top:50px;">
								<div class="row">
								<h1>Ofertas</h1>
								</div>
								<div class="row">
								<article class="col-12 col-md-6 col-xl-3" style="padding-left:10px;">
										<div class="card text-center" style="width: 15rem;">
											<a href="product-page1.php">
												<img src="imagenes/guitarra.jpg" class="card-img-top" alt="...">
												</a>
												<div class="card-body">
												<h5 class="card-title">Guitarra</h5>
												<p class="card-text">Guitarra acústica LesPaul</p>
												<a href="#" class="btn btn-dark">Comprar!</a>
												</div>
											</div>

								</article>
								<article class="col-12 col-md-6 col-xl-3">
										<div class="card text-center" style="width: 15rem;">
											<a href="product-page1.php">
												<img src="imagenes/guitarra.jpg" class="card-img-top" alt="...">
												</a>
												<div class="card-body">
												<h5 class="card-title">Guitarra</h5>
												<p class="card-text">Guitarra acústica LesPaul</p>
												<a href="#" class="btn btn-dark">Comprar!</a>
												</div>
											</div>

								</article>
								<article class="col-12 col-md-6 col-xl-3">
										<div class="card text-center" style="width: 15rem;">
											<a href="product-page1.php">
												<img src="imagenes/guitarra.jpg" class="card-img-top" alt="...">
												</a>
												<div class="card-body">
												<h5 class="card-title">Guitarra</h5>
												<p class="card-text">Guitarra acústica LesPaul</p>
												<a href="#" class="btn btn-dark">Comprar!</a>
												</div>
											</div>

								</article>
								<article class="col-12 col-md-6 col-xl-3">
										<div class="card text-center" style="width: 15rem;">
											<a href="product-page1.php">
												<img src="imagenes/guitarra.jpg" class="card-img-top" alt="...">
												</a>
												<div class="card-body">
												<h5 class="card-title">Guitarra</h5>
												<p class="card-text">Guitarra acústica LesPaul</p>
												<a href="#" class="btn btn-dark">Comprar!</a>
												</div>
											</div>

								</article>
								</div>
							</section>

							<section class="ofertas" style="padding-top:50px;">
								<div class="row">
								<h1>Productos más vendidos</h1>
								</div>
								<div class="row">
								<article class="col-12 col-md-6 col-xl-3">
										<div class="card text-center" style="width: 15rem;">
											<a href="product-page1.php">
												<img src="imagenes/guitarra.jpg" class="card-img-top" alt="...">
												</a>
												<div class="card-body">
												<h5 class="card-title">Guitarra</h5>
												<p class="card-text">Guitarra acústica LesPaul</p>
												<a href="#" class="btn btn-dark">Comprar!</a>
												</div>
											</div>

								</article>
								<article class="col-12 col-md-6 col-xl-3">
										<div class="card text-center" style="width: 15rem;">
											<a href="product-page1.php">
												<img src="imagenes/guitarra.jpg" class="card-img-top" alt="...">
												</a>
												<div class="card-body">
												<h5 class="card-title">Guitarra</h5>
												<p class="card-text">Guitarra acústica LesPaul</p>
												<a href="#" class="btn btn-dark">Comprar!</a>
												</div>
											</div>

								</article>
								<article class="col-12 col-md-6 col-xl-3">
										<div class="card text-center" style="width: 15rem;">
											<a href="product-page1.php">
												<img src="imagenes/guitarra.jpg" class="card-img-top" alt="...">
												</a>
												<div class="card-body">
												<h5 class="card-title">Guitarra</h5>
												<p class="card-text">Guitarra acústica LesPaul</p>
												<a href="#" class="btn btn-dark">Comprar!</a>
												</div>
											</div>

								</article>
								<article class="col-12 col-md-6 col-xl-3">
										<div class="card text-center" style="width: 15rem;">
											<a href="product-page1.php">
												<img src="imagenes/guitarra.jpg" class="card-img-top" alt="...">
												</a>
												<div class="card-body">
												<h5 class="card-title">Guitarra</h5>
												<p class="card-text">Guitarra acústica LesPaul</p>
												<a href="#" class="btn btn-dark">Comprar!</a>
												</div>
											</div>

								</article>
								</div>
							</section>
						</div>

					</div>

					<!-- COMIENZO FOOTER -->
					<footer>
					  <section class="container-fluid">
					  <div class="row footer-l1">
					      <div class="col-12 col-md-4">
					        <a href="Formularios/faq.php"><h5>Preguntas frecuentes!</h5></a>
					      </div>
					      <div class="col-12 col-md-4">
					        <a href="index.php"><img src="imagenes\Logo.png" alt="">  </a>
					      </div>
					      <div class="col-12 col-md-4">
					        <a href="Formularios/contacto.php"><h5>Contactanos</h5></a>
					      </div>

					  </div>

					  <div class="row footer-l2">
					    <div class="col-12 col-md-4 seguinos">

					      <div class="row">
					        <h6>Seguinos</h6>
					      <!-- </div>
					      <div class="row"> -->
					        <div class="redes">
					          <a href="http://www.facebook.com"><img src="imagenes/iconos/icons8-facebook-old-26.png" alt=""></a>
					          <a href="http://instagram.com"><img src="imagenes/iconos/icons8-instagram-50.png" alt=""></a>
					          <a href="http://www.ar.pinterest.com/"><img src="imagenes/iconos/icons8-pinterest-26.png" alt=""></a>
					          <a href="http://twitter.com"><img src="imagenes/iconos/icons8-twitter-24.png" alt=""></a>

					        </div>

					      </div>

					    </div>
					    <div class="col-12 col-md-4 trabaja">
					      <a href="#"><h5>Trabaja Con nosotros</h5>  </a>
					    </div>

					    <div class="col-12 col-md-4 contactanos">
					      <a href="#"><h5>+54 11 5263-7400</h5></a>
					    </div>


					  </div>

					  </section>

					</footer>
					<!-- FINAL DEL FOOTER -->


					<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
					<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
					</div>
					</body>
					</html>
