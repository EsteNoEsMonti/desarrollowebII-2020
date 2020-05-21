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
                    <li><a href="lmontivero_ejer19_00.php">Anterior</a></li>
                    <li><a href="lmontivero_ejer21.php">Siguiente</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container">
        <h2>Ejercicio 20</h2>
        <h5>20-Confeccionar un formulario que solicite la carga del nombre de usuario y su clave y
        retipear las claves. En la página que se procesan los datos del formulario mostrar el
nombre del usuario y si las claves son iguales mostrar un mensaje que las claves estas
OK la longitud de la clave y de lo contrario mostrar un mensaje de claves mal cargadas.</h5>
        <hr>

        <div class="container">
            <form action="lmontivero_ejer20_01.php" method="POST">
                <div class="form-group">
                    <label>Ingrese un Nombre de Usuario</label>
                    <input type="text" name="username" class="form-control" placeholder="User Name">
                </div>

                <div class="form-group">
                    <label>Ingrese un Password</label>
                    <input type="password" name="password" class="form-control" placeholder="password">
                </div>
                <div class="form-group">
                    <label>Repita su Password</label>
                    <input type="password" name="passwordrepetido" class="form-control" placeholder="password">
                </div>

                <br>
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