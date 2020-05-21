<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ejemplo de métodos POST </title>
 </head> 
 
 <body>
   <?php
 
   if(isset($_POST['enviar'])){
	    $nombre=$_POST['nombre'];
	    $ciudad=$_POST['ciudad'];
	    $anoNacimiento=$_POST['anoNacimiento'];
	   
	   	echo "El formulario se ejecutó con éxito.<br><br>";
	    echo "Mi nombre es $nombre<br>";
	    echo "Son de la ciudad $ciudad<br>";
	    echo "Y mi año de nacimiento es $anoNacimiento<br><br>";
	    ?>
   <a href="form_post_if.php">	    VOLVER</a>
<?php
	   
	   
    } else {
	 
	 	?>
  		<form action="" method="post">
      		<p>
       		Dime cuál es tu nombre: <input type="text" name="nombre">
     		</p>
      		<p>
       		Dime cómo se llama tu ciudad: <input type="text" name="ciudad">
     		</p>
      		<p>
       		¿En qué año naciste?: 
          	<select name="anoNacimiento">
           		<option value="null">Selecciona un año</option>
           		<?php
           		$anos = 1900;
         		while ($anos < 2000){
            		?>
            		<option value="<?=$anos;?>"><?=$anos;?></option>
            		<?php
           			$anos++;
				}
        		?>
          	</select>
        	</p>
       		<p>
       		<input name="enviar" type="submit" id="enviar" value="Enviar">
     		</p>
 </form>
	 	<?php
   }
   ?>
</body>
</html>