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
                    <li><a href="lmontivero_ejer18_00.php">Anterior</a></li>
                    <li><a href="lmontivero_ejer20_00.php">Siguiente</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container">
        <h2>Ejercicio 19</h2>
        <h5>19-Confeccionar un formulario que solicite la carga del nombre de una persona y que
            permita seleccionar una serie de deportes que practica (futbol, básquet, tenis, vóley)
            Mostrar en la página que procesa el formulario la cantidad de deportes que practica.</h5>
        <hr>

        <div class="container">
            <form action="lmontivero_ejer19_01.php" method="POST">
                <div class="form-group">
                    <label>Ingrese Nombre</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                </div>

                <label>Seleccione que deportes practicas</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="futbol" id="futbol" value="futbol">
                    <label class="form-check-label">
                        Futbol
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="ciclismo" id="ciclismo" value="ciclismo">
                    <label class="form-check-label">
                        Ciclismo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="voley" id="voley" value="voley">
                    <label class="form-check-label">
                        Voley
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="tenis" id="tenis" value="tenis">
                    <label class="form-check-label">
                        Tenis
                    </label>
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