<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ejemplo de métodos POST </title>
 </head> 
 
 <body>
   <?php
   // bandera para saber si hay error
	$c=0;
   if(isset($_POST['enviar'])){
	    $nombre=$_POST['nombre'];
	    $ciudad=$_POST['ciudad'];
	    $anoNacimiento=$_POST['anoNacimiento'];
	    //aqui usaremos las distintas funciones para saber si esta bien o mal el dato
	   // en el caso de nombre o ciudad solo podremos controlar que no este vaciay usamos la funcion trim= quita los espacios vacios de ambos lados de la cadena de caracteres
	    if(trim($nombre)==''){
			$err1="Debe ingresar una nombre";
			$c=1;
		}
	    if(trim($ciudad)==''){
			$err2="Debe ingresar una ciudad";
			$c=1;
		}
	    // en el caso de año de nacimiento controlaremos que no este vacia y que sea un valor numerico para lo cual usaremos is_numeric que una funcion que me devuelve verdadero o falso, este caso usaro su negacion(!) para evitano un else
	    if(trim($anoNacimiento)==''){
			$err3="Debe ingresar un año de nacimiento";
			$c=1;
		}else{
			if(!is_numeric($anoNacimiento)){
				$err3="El año de nacimiento debe ser un numero";
				$c=1;
			}
		}
	    //aqui preguntamos si existe un error 
	    if($c==0){
			echo "El formulario se ejecutó con éxito.<br><br>";
	    	echo "Mi nombre es $nombre<br>";
	    	echo "Son de la ciudad $ciudad<br>";
	    	echo "Y mi año de nacimiento es $anoNacimiento<br><br>";
	    	?>
   			<a href="form_post_if_error.php">VOLVER</a>
			<?php
		}
    }
   if(!isset($_POST['enviar']) or $c!=0 ){
	 	?>
  		<form action="" method="post">
      		<p>
       		Dime cuál es tu nombre: <input name="nombre" type="text" value="<?php echo $_POST['nombre'];?>">
       		<br>
			    <?php
	             if(isset($err1)){
					 echo $err1;
				 }
	   			?>
     		</p>
      		<p>
       		Dime cómo se llama tu ciudad: <input name="ciudad" type="text" value="<?php echo $_POST['ciudad'];?>">
			    <?php
	             if(isset($err2)){
					 echo $err2;
				 }
	   			?>
     		</p>
      		<p>
       		¿En qué año naciste?: 
          	<select name="anoNacimiento">
           		<option value="null">Selecciona un año</option>
           		<?php
           		$anos = 1900;
         		while ($anos < 2000){
					if($_POST['anoNacimiento']==$anos){
						?>
            			<option value="<?php echo $anos;?>" selected><?php echo $anos;?></option>
            			<?php
					}else{
						?>
            			<option value="<?php echo $anos;?>"><?php echo $anos;?></option>
            			<?php
					}
           			$anos++;
				}
        		?>
          	</select>
			<?php
	        if(isset($err3)){
					 echo $err3;
			}
	   		?>
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