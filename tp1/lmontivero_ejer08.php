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
                        <li><a href="lmontivero_ejer07.php">Anterior</a></li>
                        <li><a href="lmontivero_ejer09_00.php">Siguiente</a></li>
                    </ul>
                </nav>
            </div>
        </header>
		
		<main class="container">
			<h2>Ejercicio 8</h2>
			<h5>8-Crear una página de ingreso a un sistema, la cual debe tener un formulario que
contenga dos campos:

 Nombre de usuario
 Clave
			
			¿Qué método de envío debe utilizar esta página? ¿Por qué?</h5>

			
			<form action="" method="post">
				<div class="form-group">
    				<label for="exampleInputEmail1">Nombre</label>
    				<input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  				</div>
  				
				<div class="form-group">
    				<label for="exampleInputPassword1">Password</label>
    				<input type="password" name="password" class="form-control" id="exampleInputPassword1">
  				</div>
 
   				<input type="submit" class="btn btn-primary" value="Enviar">	
 
    		</form>

			<hr>

			<h4>Hola <?php echo($_POST["nombre"]); ?></h4>
			<h4>Su clave es: <?php echo($_POST["password"]); ?></h4>
			
			<p>POST. La razon porque de esta manera los datos ingresados en el formulario no serás visualizados en la url que enviemos.
			Estos datos deben ser ocultos ya que un usuario estaría mandando datos personales, es este caso su contraseña y en otros casos podría ser su tarjeta de credito por ejemplo.
			De esta manera se respetara los datos del usuario y su integridad como asi tambien la integridad del sitio web.
			</p>
	
			
		</main>
		
		<!-- JS, Popper.js, and jQuery -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
		
	</body>
	
</html>