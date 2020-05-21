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
                        <li><a href="lmontivero_ejer08.php">Anterior</a></li>
                        <li><a href="lmontivero_ejer10_00.php">Siguiente</a></li>
                    </ul>
                </nav>
            </div>
        </header>
		
		<main class="container">
			<h2>Ejercicio 9</h2>
			<h5>9-Escribir un script PHP que presente al usuario una serie de opciones con los primeros
            10 números naturales. Cada una de las opciones debe tener un enlace a otro script
            PHP, el cual debe generar la salida “Usted eligió la opción X”, siendo X el número
            seleccionado por el usuario.</h5>

            <div class="container">
                <form action="lmontivero_ejer09_01.php" method="POST">
                    
                    <select name="numeroScript" id="" class="custom-select mr-sm-2">
                        <option value="null">--Seleccionar una opcion--</option>
                        <?php
                            $numeroSelect = 1;
                            while ( $numeroSelect <= 10 ) {
                        ?>
                        <option value="<?=$numeroSelect;?>"><?=$numeroSelect;?></option>
                        <?php
                            $numeroSelect++;
                            }
                        ?>
                    </select>
                    <br><br>
                    <input type="submit" class="btn btn-primary" value="Enviar">
                </form>
            
            </div>
            

			
			
	
			
		</main>
		
		<!-- JS, Popper.js, and jQuery -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
		
	</body>
	
</html>