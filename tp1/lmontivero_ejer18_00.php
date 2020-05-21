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
                    <li><a href="lmontivero_ejer17_00.php">Anterior</a></li>
                    <li><a href="lmontivero_ejer19_00.php">Siguiente</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container">
        <h2>Ejercicio 18</h2>
        <h5>18-Realizar un formulario solicitando que se ingrese por teclado el nombre de una
            persona y disponer tres controles de tipo radio que nos permitan seleccionar si la
            persona: 1-no tiene estudios, 2-estudios primarios, 3-estudios secundarios. En la
            página que procesa el formulario mostrar el nombre de la persona y un mensaje
            indicando el tipo de estudios que posee.</h5>
        <hr>

        <div class="container">
        <form action="lmontivero_ejer18_01.php" method="POST">
                <div class="form-group">
                    <label>Ingrese Nombre</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                </div>
                <label class="">Seleccione que Estudios posee</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="estudio" id="sinestudio" value="sinestudio" checked>
                    <label class="form-check-label">
                        No tiene Estudios
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="estudio" id="primario" value="primario">
                    <label class="form-check-label">
                        Estudios Primarios
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="estudio" id="secundario" value="secundario">
                    <label class="form-check-label">
                        Estudios secundarios
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