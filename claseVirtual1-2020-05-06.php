<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Documento sin título</title>
	</head>

	<body>
		<?php
			//echo('Esta es mi primera pagina PHP');
			$miPrimeraVariable = 'Capo';
			echo('Hola ke ases');
		
			// el .(punto) es la concatenacion, es decir junta 2 elementos	
			echo( '<br>' );
			$a = 10;
			$b = 25;
			echo( $a.'<br>' );
			echo( $b.'<br>' );
			
			//las comiilas dobles son como templates string, en cambio las comillas simples muestra exactamente la cadena
			$nombreUser = 'Lucas';
			echo( "Bienvenido $nombreUser !".'<br>' );
		
			//operadorews logicos-------------------------------------------------------------
			echo( '<br>'.'operadorews logicos ----------------------------------------------'.'<br>' );
			$suma = $a + $b;
			echo( $suma.'<br>' );
			$suma+=5;
			echo( $suma.'<br>' );
		
			//incrementadores-------------------------------------------------------------------
			echo( '<br>'.'incrementadores ----------------------------------------------'.'<br>' );
			$i = 0;
			$i++;
			echo( $i.'<br>' );
			$i++;
			echo( $i.'<br>' );
		
			$i--;
			echo( $i.'<br>' );
		
			// constantes------------------------------------------------------------------------
			echo( '<br>'.'constantes ----------------------------------------------'.'<br>' );
			define('PI', 3.14); //tiene dos argumentos, el nombre de la ocnstante y el valor que le damos
			echo( 'PI es igual a '.PI.'<br>' );
		
			//estructuras de control -----------------------------------------------------------
			echo( '<br>'.'estructuras de control ----------------------------------------------'.'<br>' );
			// if, if else, if elseif, case
			
			if( $a > $b ) {
				echo( 'A es Mayor que B'.'<br>' );
			} elseif( $a < $b ) {
				echo( 'A es Menor que B'.'<br>' );
			} else {
				echo( 'A es Igual que B'.'<br>' );
			}
		
			//Repetitivas -----------------------------------------------------------
			echo( '<br>'.'Repetitivas ----------------------------------------------'.'<br>' );
			//el do while almenos una vez se ejecuta lo que esta haciendo
			
			/*
				while(condicion){
				 asdasd
				}
				
				do {
				
				} while(condicion);
				
				for( $i = 1 ; $i <= 7 ; $i++) {
				
				}
			*/
		
			//Vectores -----------------------------------------------------------
			echo( '<br>'.'Vectores ----------------------------------------------'.'<br>' );
		
			$vector[1] = 'Lucas';
			$vector[2] = 'Juan';
			$vector[] = 'Flaquito';
			$vector[] = 'Monge';	
			
			echo('Vector en la pos 1: '.$vector[1].' // Vector en la pos 2: '.$vector[2].'<br>');
			echo(' // Vector en la sig pos: '.$vector[3].'<br>');
			echo(' // Vector en la sig pos: '.$vector[4].'<br>');
		
			$vector2 = array( 1,2,3,4,5,6,7,8,9);
		
			for ( $i=0 ; $i < 4 ; $i++ ) {
				echo('vector2 es igual a: '.$vector2[$i].'<br>');
			}
		
			$array[0][0] = 'Pepe';
			$array[0][1] = 'Tomy';
			$array[1][0] = 'Lilia';
			$array[1][1] = 'Tamara';
		
			echo('array es igual a: '.$array[0][1].'<br>');
		
			/*$arrayDeArray(
				array(1,2,3,4),
				array(6,7,8,9)
			);
		
			for ( $i=0 ; $i < 2 ; $i++ ) {
				for ( $j=0 ; $j < 3 ; $j++ ) {
					echo("Array de Array: $i , $j = ".$arrayDeArray[$i][$j].'<br>');
				}
			}*/
			
			//array asociativo
			$autos = array('Modelo' => 'Mustang', 'Version' => 'GT', 'Motor' => '4.0'); //a cada campo le da un nombre y un valor
          	echo('Auto: '.$autos['Modelo'].'<br>');
			echo('Auto: '.$autos['Version'].'<br>');
			echo('Auto: '.$autos['Motor'].'<br>');
			
		?>

	</body>
</html>