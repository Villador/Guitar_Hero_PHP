

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
  <title>music</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/stylessection.css">
  <link rel="stylesheet" href="css/header-footer.css">
</head>
<body>

  <div class="container-fluid">
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light  ">
        <a class="navbar-brand" href="index.php"><img  width= "110px"src="imagenes/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown ">
          <ul class="navbar-nav mr-auto ">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Discos
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="section.php">Rock Nacional</a>
                <a class="dropdown-item" href="section.php">Funk</a>
                <a class="dropdown-item" href="section.php">Clasicos del los 80</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Audio
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="section.php">Auriculares</a>
                <a class="dropdown-item" href="section.php">Parlantes</a>

              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Instrumentos
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="section.php">Guitarras</a>
                <a class="dropdown-item" href="section.php">Baterias</a>
                <a class="dropdown-item" href="section.php">Pianos</a>
              </div>
            </li>
          </ul>
          <div class="menu-derehca navbar-nav mr-1">
            <a href="<?= $formPerfil ?>" class="btn btn-outline-secondary btn-sm mr-2"> <?= $usuarioNombre ?></a>
            <a href="Formularios/registro.php" class="btn btn-outline-secondary btn-sm mr-2"> registrate</a>
            <a href="Formularios/login.php" class="btn btn-outline-secondary btn-sm mr-2"> log in</a>
            <a class="btn btn-outline-secondary btn-sm "href="Formularios/carrito.php"><img src="https://img.icons8.com/windows/26/000000/shopping-cart.png"></a>

          </div>
        </div>


      </div>
    </nav>

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

<div class="container-fluid">
  <section>

<div class="row col-12">
  <nav class="nav flex-column d-none d-sm-block col-lg-2 pr-0 mt-5 bg-transparent">
    <h5 class="ml-2">Discos</h5>
    <a class="nav-link active" href="section.php">Rock Nacional</a>
    <a class="nav-link" href="section.php">Funk</a>
    <a class="nav-link" href="section.php">Clasicos de los 80</a>
    <h5>Audio</h5>
    <a class="nav-link active" href="section.php">Auriculares</a>
    <a class="nav-link active" href="section.php">Parlantes</a>
    <h5>Instrumentos</h5>
    <a class="nav-link active" href="section.php">Guitarras</a>
    <a class="nav-link active" href="section.php">Baterias</a>
    <a class="nav-link active" href="section.php">Pianos</a>
  </nav>

<div class="col-10">
<div class="row">
  <article class="services-section d-flex align-items-center col-lg-3 col-md-4 col-sm-6 ">
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
<article class="services-section d-flex align-items-center col-lg-3 col-md-4 col-sm-6 ">
      <div class="row text-center">
        <div class="card mx-2 " style="width: 15rem; ">
          <a href="product-page1.php"><img src="imagenes/ibanez_aeb8e_opt.jpg" class="card-img-top " alt="..."></a>
          <div class="card-body">
            <h5 class="card-title">$12.400</h5>
            <p class="card-text">Guitarra clasica</p>
            <a href="#" class="btn btn-secondary">comprar ahora</a>
          </div>
        </div>
</div>
</article>
<article class="services-section d-flex align-items-center col-lg-3 col-md-4 col-sm-6 ">
      <div class="row text-center">
        <div class="card mx-2 " style="width: 15rem; ">
          <a href="product-page1.php"><img src="imagenes/ibanez_aeb8e_opt.jpg" class="card-img-top " alt="..."></a>
          <div class="card-body">
            <h5 class="card-title">$8.700</h5>
            <p class="card-text">Guitarra clasica</p>
            <a href="#" class="btn btn-secondary">comprar ahora</a>
          </div>
        </div>
</div>
</article>
<article class="services-section d-flex align-items-center col-lg-3 col-md-4col-sm-6 ">
      <div class="row text-center">
        <div class="card mx-2 " style="width: 15rem; ">
          <a href="product-page1.php"><img src="imagenes/ibanez_aeb8e_opt.jpg" class="card-img-top " alt="..."></a>
          <div class="card-body">
            <h5 class="card-title">$10.500</h5>
            <p class="card-text">Guitarra clasica</p>
            <a href="#" class="btn btn-secondary">comprar ahora</a>
          </div>
        </div>
</div>
</article>
<article class="services-section d-flex align-items-center col-lg-3 col-md-4 col-sm-6 ">
      <div class="row text-center">
        <div class="card mx-2 " style="width: 15rem; ">
          <a href="product-page1.php"><img src="imagenes/ibanez_aeb8e_opt.jpg" class="card-img-top " alt="..."></a>
          <div class="card-body">
            <h5 class="card-title">$13.000</h5>
            <p class="card-text">Guitarra clasica</p>
            <a href="#" class="btn btn-secondary">comprar ahora</a>
          </div>
        </div>
</div>
</article>
<article class="services-section d-flex align-items-center col-lg-3 col-md-4 col-sm-6 ">
      <div class="row text-center">
        <div class="card mx-2 " style="width: 15rem; ">
          <a href="product-page1.php"><img src="imagenes/ibanez_aeb8e_opt.jpg" class="card-img-top " alt="..."></a>
          <div class="card-body">
            <h5 class="card-title">$21.000</h5>
            <p class="card-text">Guitarra clasica</p>
            <a href="#" class="btn btn-secondary">comprar ahora</a>
          </div>
        </div>
</div>
</article>
<article class="services-section d-flex align-items-center col-lg-3 col-md-4 col-sm-6 ">
      <div class="row text-center">
        <div class="card mx-2 " style="width: 15rem; ">
          <a href="product-page1.php"><img src="imagenes/ibanez_aeb8e_opt.jpg" class="card-img-top " alt="..."></a>
          <div class="card-body">
            <h5 class="card-title">$18.800</h5>
            <p class="card-text">Guitarra clasica</p>
            <a href="#" class="btn btn-secondary">comprar ahora</a>
          </div>
        </div>
</div>
</article>
<article class="services-section d-flex align-items-center col-lg-3 col-md-4 col-sm-6 ">
      <div class="row text-center">
        <div class="card mx-2 " style="width: 15rem; ">
          <a href="product-page1.php"><img src="imagenes/ibanez_aeb8e_opt.jpg" class="card-img-top " alt="..."></a>
          <div class="card-body">
            <h5 class="card-title">$16.500</h5>
            <p class="card-text">Guitarra clasica</p>
            <a href="#" class="btn btn-secondary">comprar ahora</a>
          </div>
        </div>
</div>
</article>
  </div>
  </div>
</div>
  </section>

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
</body>
</html>
