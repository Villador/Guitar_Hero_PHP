


						<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<a class="navbar-brand" href="index.php"><img  width= "110px"src="imagenes/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<!-- <li class="nav-item active">
								<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Link</a>
							</li> -->
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Discos
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="section.php">Rock Nacional</a>
									<a class="dropdown-item" href="section.php">Funk</a>
									<a class="dropdown-item" href="section.php">Clasicos del los 80</a>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Audio
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="section.php">Auriculares</a>
									<a class="dropdown-item" href="section.php">Parlantes</a>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Instrumentos
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="section.php">Guitarras</a>
									<a class="dropdown-item" href="section.php">Baterias</a>
									<a class="dropdown-item" href="section.phpl">Pianos</a>
								</div>
							</li>
							<!-- <li class="nav-item">
								<a class="`nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>`
							</li> -->
						</ul>
						<!-- <form class="form-inline my-2 my-lg-0">
							<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
						</form> -->
						<div class="menu-derecha navbar-nav mr-1">

							<a href="<?= $formPerfil ?>" class="btn btn-outline-secondary btn-sm mr-2"> <?= $usuarioNombre ?></a>
							<a href="Formularios/registro.php" class="btn btn-outline-secondary btn-sm mr-2"> registrate</a>
							<a href="Formularios/login.php" class="btn btn-outline-secondary btn-sm mr-2"> log in</a>
							<a class="btn btn-outline-secondary btn-sm "href="<?= $formCarrito ?>"><img src="https://img.icons8.com/windows/26/000000/shopping-cart.png"></a>

						</div>
					</div>
				</nav>
