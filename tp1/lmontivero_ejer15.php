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
                    <li><a href="lmontivero_ejer14_00.php">Anterior</a></li>
                    <li><a href="lmontivero_ejer16.php">Siguiente</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container">
        <h2>Ejercicio 15</h2>
        <h5>15-Generar n numero enteros, mostrar si el número es par o impar, y al
            final decir cuántos números fueron impares y cuantos pares.</h5>
        <hr>

        <div class="container text-center">
            <h3>Cantidad de numeros en total: 20</h3>
            <?php
                $countImpares = 0;
                $countPares = 0;

            ?>

            <div class="row">
                <div class="col">
                    <span class="badge badge-primary">Numeros Pares</span>
                    <?php
                        for ($i=0; $i < 20; $i++) {
                            if ( $i%2 == 0 ) {
                                echo("<p> $i </p>");
                                $countPares++;
                            }
                        }
                        echo("<span class='badge badge-success'>Cantidad Pares: $countPares</span>");
                    ?>

                </div>
                <div class="col">
                    <span class="badge badge-warning">Numeros Impares</span>
                    <?php
                        for ($i=0; $i < 20; $i++) {
                            if ( $i%2 != 0 ) {
                                echo("<p> $i </p>");
                                $countImpares++;
                            }
                        }
                        echo("<span class='badge badge-success'>Cantidad Impares: $countImpares</span>");
                    ?>
                </div>
            </div>




        </div>

    </main>

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>