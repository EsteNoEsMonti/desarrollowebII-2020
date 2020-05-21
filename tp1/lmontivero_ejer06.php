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
                        <li><a href="lmontivero_ejer05.php">Anterior</a></li>
                        <li><a href="lmontivero_ejer07.php">Siguiente</a></li>
                    </ul>
                </nav>
            </div>
        </header>
		
		<main class="container">
			<h2>Ejercicio 6</h2>
			<h5>6-Crear una página que contenga un formulario con método GET y un campo de texto
(nombre). Escribir un script PHP que muestre el mensaje “Bienvenido nombre” donde
nombre debe ser reemplazado por lo ingresado por el usuario en la primera página.</h5>

			
			<form action="" method="get">
     			<p>
       				Ingrese su Nombre: <input type="text" name="nombre">
     			</p>
 
      			<p>
       				<input type="submit" value="Enviar">
	     		</p>
				
				<h4>Hola <?php echo($_GET["nombre"]); ?></h4>
					
				
 
    		</form>
	
			
		</main>
		
		<!-- JS, Popper.js, and jQuery -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
		
	</body>
	
</html>