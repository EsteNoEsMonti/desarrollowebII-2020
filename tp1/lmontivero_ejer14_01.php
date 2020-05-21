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
                        <li><a href="lmontivero_ejer14_00.php">Volver al Ejer 14</a></li>
                    </ul>
                </nav>
            </div>
        </header>
		
		<main class="container">
            <h2>Ejercicio 14</h2>
            
            <hr>

            <div class="container">
                <h3>Datos Recibidos</h3>
            <?php
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                echo("
                    <label>User Name: $username</label> <br>
                    <label>Email: $email</label> <br>
                    <label>Password: $password</label> <br> <hr>
                ");

                // Validacion... o algo asi
                // if ( $username.trim() == '' ) { No le encontré la vuelta :()
                if ( $username === '' || $email === '' || $password === '') {
                    echo("
                        <h4>Los datos ingresados NO son Validos</h4>
                        <a href='lmontivero_ejer14_00.php' class='btn btn-danger'>Volver a revisar</a>
                    ");
                } else {
                    echo("
                        <h4>Los datos ingresados son Validos</h4>
                        <a href='lmontivero_ejer15.php' class='btn btn-primary'>Siguiente Ejercicio</a>
                    ");
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