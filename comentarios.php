<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<!--Comentarios dentro de código PHP
En PHP 7 como en todos los lenguajes de programación y de marcado (HTML, XML, CSS, etc.) existen los comentarios. Pero, ¿qué son los comentarios?, bueno los comentarios son fragmentos de texto dentro de código de programación que, a través de algunos caracteres al inicio, el binario de PHP los ignorará, en PHP hay tres tipos:
•	1.- De doble barra //
•	2.- Con signo de gato #
•	3.- Con barra y asterisco para apertura y asterisco y barra para cierre /* */
Ahora veamos los ejemplos:

Doble barra-->

	<?php
    // ¡Este es el primer tipo de comentario!. Podemos agregar tanto texto como queramos sin cambiar de renglón.
  	echo "Dejaremos este echo como ejemplo de ejecución de PHP comentarios con //<br>";
    ?>


<!--Con signo numeral (#)-->

	<?php
	# ¡Este es el segundo tipo de comentario!. Podemos agregar tanto texto como queramos sin cambiar de renglón.
  	echo "Dejaremos este echo como ejemplo de ejecución de PHP comentarios con # <br>";
   	?>

<!--on barra y asterisco para apertura y asterisco y barra para cierre /* */-->

	<?php
	/* 
  	¡Este es el segundo tipo de comentario!. 
   	Podemos agregar tanto texto como queramos cambiando de renglón.
   	Sin importar que escribamos
   	Bajando de renglones
   	Hasta su cierre
 	*/
   	echo "Dejaremos este echo como ejemplo de ejecución de PHP comentarios con /* */ <br>";
  	 ?>
 
</body>
</html>