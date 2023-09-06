<?php
session_start();

?>
<!DOCTYPE html>
<html lang="es">

<head>

	<meta charset="utf-8" />

	<title>Collector</title>
	<link href="https://file.myfontastic.com/yES8K5ctiVTqpcgfJwB6TD/icons.css" rel="hoja de estilo">
	<link rel="stylesheet" type="text/css" href="css/normaliza.css">
	<link rel="stylesheet" type="text/css" href="css/skeleton.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

	<meta name="viewport" content="width=device-width, 
    user-scalable=yes, initial-scale=1.0, maximum-
    scale=3.0, minimun-sacle=1.0">

</head>

<body>

	<?php
	if (isset($_SESSION["usuario"])) {
	} else {

		'<input type="checkbox" id="cerrar">
    <label for="cerrar" id="btn-cerrar">X</label>

    <div class="modal">
        <div class="contenido">

            <h2>Bienvenido</h2>>

            
        </div>
    </div>';
	}
	?>

	<header class="header">
		<div class="container">
			<div class="row">

				<div class="four columns">
					<h1>Colletors</h1>

				</div>
				<div class="two columns u-pull-right">
					<ul>
						<li class="submenu">
							<img src="img/cart.png">
							<div id="carrito">
								<p class="vacio">carrito vacio</p>
								<table id="lista-carrito" class="u-full-width">
									<thead>
										<tr>
											<th>Imagen</th>
											<th>Productos</th>
											<th>Precio</th>
										</tr>
									</thead>
									<tbody>

									</tbody>
								</table>

								<script>
									function Function() {
										location.href = "paypal.html";

									}
								</script>

								<a href="paypal.html" onclick="Function()" class="button u-full-width"><input type="button" value="Pagar producto"></a>

								<a href="#" id="vaciar-carrito" class="button u-full-width">vaciar carrito</a>
							</div>
						</li>
					</ul>
				</div>

				<?PHP

				if (isset($_SESSION["usuario"])) {
					echo '<span class="Etiquetas"> Hola ' . $_SESSION["usuario"] . '&nbsp;</span>';
					echo '<a class = "Usuario" href="php/cerrarsesion.php"> Cerrar sesion...</a>';
					echo '<div class="login">
        <li><a titulo="Mi cuenta" href="loginvista.html"><img src="img/user.png" class="navimg" height="25px"></a></li>
            </div>';
				} else
					echo '<div class="login">
        <li><a titulo="Mi cuenta" href="loginvista.html"><img src="img/user.png" class="navimg" height="25px"></a></li>
            </div>';
				?>


			</div>
		</div>
	</header>

	<div class="hero">
		<div class="container">
			<div class="row">
				<div class="six columns">
					<div class="contenido-hero">
						<h2>Busca un juguete</h2>
						<form>
							<input class="u-full-width" type="text" placeholder="¿Que juguete buscas?" id="buscador">
							<input type="submit" class="submit-buscador">
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>

	<nav>
		<ul>
			<li><a title="Accion y aventuras" href="#"><span class="icon-home3"></span>Marvel</a></li>
			<li><a title="Lucha" href="#"><span class="icon-users"></span>DC</a></li>
			<li><a title="Carreras" href="#"><span class="icon-user-tie"></span>Star Wars</a></li>
		</ul>
	</nav>


	<div id="lista-catalogo" class="container">
		<h1 class="encabezado">Juguetes</h1>
		<div class="row">
			<div class="four columns">
				<div class="card">
					<img src="img/product1.jpg" class="u-full-width">
					<div class="info-card">
						<h4>Galactus</h4>
						<p>Promocion</p>
						<img src="img/estrellas.png">
						<p class="precio">$500<span class="u-pull-right">$150</span></p>
						<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar al carrito</a>
					</div>
				</div>
			</div>

			<div class="four columns">
				<div class="card">
					<img src="img/product2.jpg" class="u-full-width">
					<div class="info-card">
						<h4>Batman Beyond</h4>
						<p>Promocion</p>
						<img src="img/estrellas.png">
						<p class="precio">$500<span class="u-pull-right">$150</span></p>
						<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="2">Agregar al carrito</a>
					</div>
				</div>
			</div>
			<div class="four columns">
				<div class="card">
					<img src="img/product3.jpg" class="u-full-width">
					<div class="info-card">
						<h4>Halcon milenario</h4>
						<p>Promocion</p>
						<img src="img/estrellas.png">
						<p class="precio">$500<span class="u-pull-right">$150</span></p>
						<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="3">Agregar al carrito</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="four columns">
				<div class="card">
					<img src="img/product4.jpg" class="u-full-width">
					<div class="info-card">
						<h4>Centinela</h4>
						<p>Promocion</p>
						<img src="img/estrellas.png">
						<p class="precio">$500<span class="u-pull-right">$150</span></p>
						<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="4">Agregar al carrito</a>
					</div>
				</div>
			</div>
			<div class="four columns">
				<div class="card">
					<img src="img/product5.jpg" class="u-full-width">
					<div class="info-card">
						<h4>Superman</h4>
						<p>Promocion</p>
						<img src="img/estrellas.png">
						<p class="precio">$500<span class="u-pull-right">$150</span></p>
						<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="5">Agregar al carrito</a>
					</div>
				</div>
			</div>
			<div class="four columns">
				<div class="card">
					<img src="img/product6.jpg" class="u-full-width">
					<div class="info-card">
						<h4>Darth vader</h4>
						<p>Promocion</p>
						<img src="img/estrellas.png">
						<p class="precio">$500<span class="u-pull-right">$150</span></p>
						<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="6">Agregar al carrito</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="four columns">
				<div class="card">
					<img src="img/product7.jpg" class="u-full-width">
					<div class="info-card">
						<h4>Moon knight </h4>
						<p>Promocion</p>
						<img src="img/estrellas.png">
						<p class="precio">$500<span class="u-pull-right">$150</span></p>
						<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="7">Agregar al carrito</a>
					</div>
				</div>
			</div>
			<div class="four columns">
				<div class="card">
					<img src="img/product8.jpg" class="u-full-width">
					<div class="info-card">
						<h4>Jocker</h4>
						<p>Promocion</p>
						<img src="img/estrellas.png">
						<p class="precio">$500<span class="u-pull-right">$150</span></p>
						<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="8">Agregar al carrito</a>
					</div>
				</div>
			</div>
			<div class="four columns">
				<div class="card">
					<img src="img/product9.jpg" class="u-full-width">
					<div class="info-card">
						<h4>Luke skywalker</h4>
						<p>Promocion</p>
						<img src="img/estrellas.png">
						<p class="precio">$500<span class="u-pull-right">$150</span></p>
						<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="9">Agregar al carrito</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="four columns">
				<div class="card">
					<img src="img/product10.jpg" class="u-full-width">
					<div class="info-card">
						<h4>Scarlet witch</h4>
						<p>Promocion</p>
						<img src="img/estrellas.png">
						<p class="precio">$500<span class="u-pull-right">$150</span></p>
						<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="10">Agregar al carrito</a>
					</div>
				</div>
			</div>
			<div class="four columns">
				<div class="card">
					<img src="img/product11.jpg" class="u-full-width">
					<div class="info-card">
						<h4>Green lantern</h4>
						<p>Promocion</p>
						<img src="img/estrellas.png">
						<p class="precio">$500<span class="u-pull-right">$150</span></p>
						<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="11">Agregar al carrito</a>
					</div>
				</div>
			</div>
			<div class="four columns">
				<div class="card">
					<img src="img/product12.jpg" class="u-full-width">
					<div class="info-card">
						<h4>Mandaloriano</h4>
						<p>Promocion</p>
						<img src="img/estrellas.png">
						<p class="precio">$500<span class="u-pull-right">$150</span></p>
						<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="12">Agregar al carrito</a>
					</div>
				</div>
			</div>
		</div>
	</div>


	<?php
	include 'templates/footer.php'
	?>

	<script type="text/javascript" src="js/app.js"></script>


</body>

</html>
</DOCTYPE>