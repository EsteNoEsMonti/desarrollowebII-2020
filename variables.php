<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
	/*
Variables en PHP
Las variables son uno de los primeros temas que tenemos que conocer en PHP y en la mayoría de los lenguajes de programación.
Una variable es un contenedor de información, en el que podemos almacenar números enteros, números decimales, cadenas de texto, etc. El contenido de las variables se puede leer y se puede cambiar durante la ejecución de una página que tenga PHP.
En PHP todas las variables comienzan con el símbolo del dólar $ y no es necesario definir una variable antes de usarla ej. $a, $inicio.
Tampoco tienen tipos, es decir que una misma variable puede contener un número y luego puede contener caracteres.
OJO: Son sensibles a minúsculas y mayúsculas:  $INICIO no es la misma variable que $inicio y tampoco se deben de iniciar con un número (más abajo especificamos ejemplos inválidos).
     $1inicio es una variable incorrecta
     $%inicio es una variable incorrecta
     $_inicio es una variable correcta, acepta el guion bajo.
     $inicio variable correcta
     $INICIO variable correcta pero diferente a la anterior $inicio
     $inicio_123 variable correcta
     $123_inicio variable incorrecta
La asignación de un valor a la variable es muy simple
     $a=25;   
     $b=”Hola”;  

TIPO DE DATO	DEFINICIÓN

Integer	Los integers, o enteros, pueden tener distintos valores numéricos enteros que se expresan con diferentes notaciones.
$variable = 18; // Número entero positivo
$variable = -18; // Número entero negativo
$variable = 0x12; // Notación hexadecimal, en principio no la utilizaremos

float o double	Este tipo de datos son los números de punto flotante a los que normalmente llamamos “números decimales”, por ejemplo, 9.876. Ambos tienen mucha precisión, pero double es el más preciso (con más decimales). La sintaxis para utilizarlos es bastante simple:
$variable = 9.876;

String	El tipo de datos string, también conocido como cadena de caracteres, se expresa con la siguiente sintaxis:
$variable = "Yo soy una cadena";

boolean	Se trata de un tipo lógico. Sus posibles valores son true (verdadero) o false (falso).
$variable = true;
$variable = false;
*/
//Enteros:
$a1 = 1234; # número decimal
$a2 = -123; # número negativo
$a3 = 0123; # número octal (83 en decimal)
$a4 = 0x12; #número en hexadecimal (18 decimal)
echo "titpos de variables<br>";
	echo "Enteros<br>";
	echo $a1."<br>";
	echo $a2."<br>";
	echo $a3."<br>";
	echo $a4."<br>";

	//Flotantes:
//Los números de punto flotante pueden notarse de la siguiente manera:
  $b1 = 1.234;
  
	echo "Flotantes<br>";

	echo $b1."<br>";


  /*Strings:
Un string puede inicializarse usando comillas dobles o comillas simples. Cuando se utilizan comillas dobles el intérprete de php parsea previamente el string, es decir que reemplaza los nombres de variables que encuentra en el string por el contenido de la variable. Cuando se usan comillas simples el string se imprime tal y como figura sin ser parseado. 
Ej.:*/
$x1=”Juan”;
	echo "String<br>";
	echo $x1."<br><br>";
	
	echo "aquí usamos comillas dobles y el salto de línea de HTML<br>";
    $a=25;
	//aquí usamos comillas dobles y el salto de línea de HTML
	echo "(comilla doble) la variable tiene un valor de a =  $a <br>";
	//aquí usamos comillas simples y el salto de línea de HTML
	echo '(comillas simple) la variable tiene un valor de a =  $a <br><br>';
	
    $b=”Hola”;  

	//aquí usamos comillas dobles y el salto de línea de HTML
	echo "(comilla doble) la variable tiene un valor de b =  $b <br>";
	//aquí usamos comillas simples y el salto de línea de HTML
	echo '(comilla simple) la variable tiene un valor de b =  $b <br><br>';

	$c=true;
	//aquí usamos comillas dobles y el salto de línea de HTML
	echo "(comilla doble) la variable tiene un valor de c =  $c <br>";
	//aquí usamos comillas simples y el salto de línea de HTML
	echo '(comilla simple) la variable tiene un valor de c =  $c <br><br>';
	
	$d=23.4;
	//aquí usamos comillas dobles y el salto de línea de HTML
	echo "(comilla doble) la variable tiene un valor de d =  $d <br>";
	//aquí usamos comillas simples y el salto de línea de HTML
	echo '(comilla doble) la variable tiene un valor de c =  $d <br><br>';
  
  /*En una cadena de texto quiero mostrar la siguiente frase usando la comilla simple
¿Qué pasa con la comilla simple ’ como este?
En php debería ser 
    
	echo ‘¿Qué pasa con la comilla simple ’ como este?’;
            ?>
         Me daría un error

Existen dos soluciones:
•	Usar comillas dobles en la instrucción echo
•	Anteponer ante la comilla simple con \
*/
    echo "caracter \<br>";
	echo "¿Qué pasa con la comilla simple ' como este?<br>";
 
	// otra solucion
     echo '<br>¿Qué pasa con la comilla simple\' como este?<br><br>';

/*Cuando se añade la barra invertida delante de la comilla simple, se va a evitar que este se interprete como el final de la instrucción echo.

Lo mismo ocurre con las comillas doble, aclararíamos este punto
Por ejemplo
Tenemos una variable */
$a="Estamos probando en la comillas dobles!";
//Y queremos que salga 
      //La variable $a tiene un contenido de $a 
      //En php seria
      echo "la variable $a tiene un contenido $a<br>";
 
	/*Entonces pasa que cuando ponemos un texto entre comillas dobles, el texto tiene una variable definida anteriormente, se muestra el valor de la variable.
 Lo correcto seria */
      echo "la variable \$a tiene un contenido $a<br>";
/*La concatenación
Se pueden concatenar strings usando el operador “.” de la siguiente manera:*/
$x="hola";
$y="mundo";
$s=$x.$y; #$s es igual a “holamundo”.
 echo "$s<br>"; 	

$s=$x." ".$y;  //Aquí $s vale “hola mundo”

echo $x." ".$y."<br><br>";
	
/*Constantes
Son valores que se van a mantener constantes a lo largo de la ejecución del script y que posiblemente queramos usar a lo largo del script un gran número de veces. Para ello usamos la siguiente sintaxis:
define("nombre de la constante", valor);
Ej.*/
 echo "Variables Constantes<br><br>";
	Define("PI",3.14);
    echo "el valor de PI=  ".PI."<br>";

?>	
</body>
</html>