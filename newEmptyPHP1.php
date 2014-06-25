<?php


//tomo el valor de un elemento de tipo texto del formulario 
$cadenatexto = $_POST["cadenatexto"]; 
echo "Escribio en el campo de texto: " . $cadenatexto . "<br><br>"; 

//datos del arhivo 
$nombre_archivo = $HTTP_POST_FILES['userfile']['name']; 
$tipo_archivo = $HTTP_POST_FILES['userfile']['type']; 
$tamano_archivo = $HTTP_POST_FILES['userfile']['size']; 
//compruebo si las características del archivo son las que deseo 

   	if (move_uploaded_file($HTTP_POST_FILES['userfile']['tmp_name'], $nombre_archivo)){ 
      	 echo "El archivo ha sido cargado correctamente."; 
   	}else{ 
      	 echo "Ocurrio algun error al subir el fichero. No pudo guardarse."; 
   	} 

print_r($_FILES);
?> 
