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
                    <li><a href="lmontivero_ejer16.php">Anterior</a></li>
                    <li><a href="lmontivero_ejer18_00.php">Siguiente</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container">
        <h2>Ejercicio 17</h2>
        <h5>17-Implementar un formulario que solicite la carga de dos enteros. Disponer dos
            controles de tipo radio que nos permitan seleccionar si queremos sumar o restar los
            dos valores ingresados. Y devolver en otra página el resultado de la suma o resta.
            En la primera página lo siguiente: En la segunda página:</h5>
        <hr>

        <div class="container">
            <form action="lmontivero_ejer17_01.php" method="POST">
                <div class="form-group">
                    <label>Ingrese el Primer valor</label>
                    <input type="text" name="num1" class="form-control" placeholder="Primer valor">
                </div>
                <div class="form-group">
                    <label>Ingrese el Segundo valor</label>
                    <input type="text" name="num2" class="form-control" placeholder="Segundo valor">
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="operacion" id="suma" value="suma" checked>
                    <label class="form-check-label">
                        Sumar
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="operacion" id="resta" value="resta">
                    <label class="form-check-label">
                        Restar
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