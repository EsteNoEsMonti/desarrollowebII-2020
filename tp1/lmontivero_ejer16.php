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
                    <li><a href="lmontivero_ejer15.php">Anterior</a></li>
                    <li><a href="lmontivero_ejer17_00.php">Siguiente</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container">
        <h2>Ejercicio 16</h2>
        <h5>16-Realice un programa que sume los primeros 20 números primos. Un
            número primo es aquel que solo es divisible entre el mismo y la unidad. Ejemplos de
            números primos: 1,2,3,5,7,11, …Ejemplos de números no primos: 4, 6,8,9, …</h5>
        <hr>

        <div class="container">
            <?php
                $countPrimos;
                for ($i = 0; $i < 70; $i++) {
                    if ( primo($i) ) {
                        echo("<p>El número <span class='badge badge-primary'>$i</span> es primo.</p>");
                        $countPrimos++;
                    }
                }
                echo("<h4>Cantidad de numero primos: $countPrimos</h4>");

                // Boleean function, true = primo
                function primo($num) {
                    if ($num == 2 || $num == 3 || $num == 5 || $num == 7) {
                        return True;
                    } else {
                        if ($num % 2 != 0) {
                            for ($i = 3; $i <= sqrt($num); $i += 2) {
                                if ($num % $i == 0) {
                                    return false;
                                }
                            }
                            return true;
                        }
                    }
                    return false;
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