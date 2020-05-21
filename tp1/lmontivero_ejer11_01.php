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
                        <li><a href="lmontivero_ejer11_00.php">Volver al Ejer 11</a></li>
                    </ul>
                </nav>
            </div>
        </header>
		
		<main class="container">
			<h2>Ejercicio 11</h2>
			<h5>11-Crear una página en la cual el usuario ingrese dos números y al oprimir un botón
            obtenga una nueva página en la cual se vea el mayor de ellos.</h5>

            <div class="container">
            <?php 
                $numero1 = $_POST["numero1"];
                $numero2 = $_POST["numero2"];
    
                if ( $numero1 > $numero2 ) {
                    echo("El Numero $numero1 (variable 1) es Mayor que el Numero $numero2 (variable 2)");
                } elseif ( $numero2 > $numero1 ) {
                    echo("El Numero $numero2 (variable 2) es Mayor que el Numero $numero1 (variable 1)");
                } else {
                    echo( "Los Numeros $numero1 (variable 1) y $numero2 (variable 2) son Iguales" );
                }
            ?>
                
            </div>
			
		</main>
		
		<!-- JS, Popper.js, and jQuery -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
		
	</body>
	
</html>