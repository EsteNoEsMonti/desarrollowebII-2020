<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<!-- CSS only -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<link rel="stylesheet" href="standar.css">

	<title>Trabajo Practico 1</title>
</head>

<body>

	<!--Header -->
	<header class="header">
		<div class="container logo-nav-container">
			<a href="index.php" class="logo">Trabajo Practico Nro 1</a>
			<nav class="navigation">
				<ul>
					<li><a href="index.php">Inicio</a></li>
					<li><a href="lmontivero_ejer12.php">Anterior</a></li>
					<li><a href="lmontivero_ejer14_00.php">Siguiente</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<main class="container">
		<h2>Ejercicio 13</h2>
		<h5>13-Realizar un formulario donde se ingrese una tabla y la cantidad de números de la
			tabla (ej. tabla=3 Nro.= 12). Generar un vector con los resultados y luego mostrarlos
			por pantalla en un tabla de HTML y con un hipervínculo que permita ingresa nuevos
			valores.</h5>
		<hr>

		<div class="container">
			<form action="" method="POST">
				<div class="form-group">
					<label>Valor de la tabla</label>
					<input type="numeric" name="valor1" class="form-control">
				</div>
				<div class="form-group">
					<label>Valor de Nuemeros</label>
					<input type="numeric" name="valor2" class="form-control">
				</div>

				<input type="submit" class="btn btn-primary" value="Enviar">
			</form>

			<hr>
			<table class="table table-bordered tabla">
				<?php
					$valor1 = $_POST['valor1'];
					$valor2 = $_POST['valor2'];

					if ( $valor1 && $valor2 ) {
						echo("
							<span class='badge badge-primary'>Valor de Tabla: $valor1</span> <br>
							<span class='badge badge-primary'>Valor de Numeros: $valor2</span>
						");
					}

					$numero = 1;

					for ($i = 0; $i < $valor1; $i++) {
						echo ("<tr>");
						for ($j = 0; $j < $valor2; $j++) {
							echo ("<th> $numero </th>");
							$numero++;
						}
						echo ("</tr>");
					}
				?>
			</table>


		</div>

	</main>

	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>