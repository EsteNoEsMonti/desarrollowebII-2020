<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
	<!--/*
    Sintaxis básica
   XHTML (Extensible Hypertext Markup Language) es un lenguaje de etiquetas. Es el sucesor de HTML y se basa en la sintaxis de XML. Asegura la compatibilidad tanto en equipos clásicos como en smartphones.
   Como php es un leguaje que se embebe dentro del código HTML, se debe utilizar etiquetas de inicio y cierre para indicar que lo siguiente es lenguaje php.
   Existen dos posibilidades para  definir que un archivo debe ser interpretado en PHP
   Opción #1 (recomendada):
   < ? php
      aquí irá todo el contenido en lenguaje PHP
  ?>
  Esta opción, se sugiere como alternativa recomendada, puesto que independientemente del valor establecido en short_open_tag en el php.ini, funcionará por defecto y sin necesidad de modificar el archivo php.ini, en cualquier servidor.
  Opción #2:
  < ?
    aquí irá todo el contenido en lenguaje PHP
  ?>
  Esta alternativa, representa una forma abreviada de las etiquetas anteriores. Utilizarla, requiere de configurar el archivo php.ini, estableciendo el valor de short_open_tag a On.
  Puede leer más información sobre short_open_tag en http://www.php.net/manual/es/ini.core.php#ini.short-open-tag.
  Nuestra primera página con php
  Esto es un ejemplo de una página php.-->
  
	<?php
	   echo "Esta es mi primera página ";
	?>

	
</body>
</html>