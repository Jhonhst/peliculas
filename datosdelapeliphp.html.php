<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> subir datos de la peli</title>
</head>
<body>
    <h1> subir datos de la peli</h1>
    <form action="datosdelapeliphp.php" method="post">
   Url de la imagen:
   <input type="text" name="imagen" required>
   <br> 
   Url de la imagen horizontal:
   <input type="text" name="imagenho" >
   <br> 
   Url del video:
   <input type="text" name="video" required>
   <br>
   Url del trailer:
   <input type="text" name="trailer" required>
   <br>
   titulo es español y el que va en el link:
   <input type="text" name="titulo" required>
   <br> 
   titulo en ingles se tiene:
   <input type="text" name="titulo2" >
   <br>
   Año de la pelicula:
   <input type="text" name="anio" required>
   <br> 
   Duración:
   <input type="text" name="duracion" required>
   <br>  
   Sinopsis:
   <textarea name="sinopsis" id="" cols="80" rows="5"></textarea>
   <br>   
   Idioma:
   <label ><input type="checkbox" name="idiomas[]" value="espaniol">Español latino</label>
   <label ><input type="checkbox" name="idiomas[]" value="subespaniol">sub español</label>
   <label ><input type="checkbox" name="idiomas[]" value="espanioles">español</label>

   <br>  
seleccione generos:
<br>  
    <?php

$con=mysqli_connect("localhost","root","","peliculas") or die ("Problemas con la conexión a la base de datos");
$acentos = $con->query("SET NAMES 'utf8'");

$registros=mysqli_query($con,"select idcategorias,genero from categorias")    or die (mysqli_error($con));

while($reg=mysqli_fetch_array($registros))
{
    // echo "<option value=\"".$reg['codigo']."\"> ".$reg['genero']."  </option>";
    echo "<label>";
    echo $reg['genero'];
    echo "<input type='checkbox' name='opcion[]' value=\"".$reg['idcategorias']."\">";
    echo "</label>";
    echo "<br>";
}
    ?>

<br>
   <input type="submit" value="Confirmar">
</form>
</body>
</html>
<!-- Acción:
<input type="checkbox" name="accion" value="1">
animacion:
<input type="checkbox" name="accion" value="2">
terror:
<input type="checkbox" name="accion" value="3">
marvel
<input type="checkbox" name="accion" value="4"> -->