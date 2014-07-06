<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Galerías</title>

    </head>
    <body bgcolor="#FFFFCC">
        
   
  <br><br>
        
        <?php       
        
        $pathname=$_POST["nuevaGale"];
        
        
        mkdir($pathname); 
        chmod($pathname,  0777);
        
       ?> 
        
       <a href='index.php' >Volver</a>
    </body>
</html>

