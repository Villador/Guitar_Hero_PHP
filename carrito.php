
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

if(isset($_GET['log'])){
	if (logOut($_GET['log'])){
		header('location:index.php');
	}

}

}else {
	$formPerfil="#";
	$formCarrito="index.php";


	header("Location:index.php");
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tus Compras</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/carrito.css">
<link rel="stylesheet" href="css/headerfooterCarrito.css">
</head>
<body>
  <div class="conainer-fluid">
    <header>
			<div class="container-fluid">
					<!-- esto es el header -->

				<?php require_once("header.php"); ?>

				<!-- final del header -->

			</div>
      </header>
        </div>


    </nav>
  </div>

<section>
<div class="container">
  <div class="row">
    <div class="prductos col-lg-8">
    <h3>Tu Carrito</h3>

    <div class="table-reponsive">
      <table class="table table-bordered">
  <thead>
    <tr class="bg-secondary">
      <th scope="col">#</th>
      <th scope="col">producto</th>
      <th scope="col">Descripcion</th>
      <th scope="col">precio</th>
      <th scope="col">cantidad</th>
      <th scope="col">total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td ><img src="imagenes/ibanez_aeb8e_opt.jpg" alt="" width="80px"height="80px"> </td>
      <td>guitarra criolla</td>
      <td>$15.000</td>
      <td class="cart_quantity">
				<div class="cart_quantity_button">
						<a class="cart_quantity_up" href=""> + </a>
						<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
						<a class="cart_quantity_down" href=""> - </a>
				</div>
		</td>
    <td>$15.000</td>
    </tr>
  </tbody>
</table>
    </div>

    </div>
  </div>
  <div class="prductos col-lg-4">
    </div>
<button type="button" class="btn btn-outline-secondary">Comprar</button>

  </div>


</section>

<!-- COMIENZO FOOTER -->

<footer id="footer">
			<?php require_once("footer.php"); ?>

</footer>
<!-- FINAL DEL FOOTER -->



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
