<?php
include_once "conexion.php";
include_once "categoriaencontrada.php";
require_once "zebra.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" >
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/1estilos.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/navbar-top-fixed.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <title ><?php echo $asociativo['genero'] ?></title>
</head>
<body style="background: black">
 <!-- inicio de navbar -->
<!-- aqui cambie todo en navbbar -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top ">
    <a class="navbar-brand " href="portada.php">SuperPelis</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item">
          <a class="nav-link active" href="categorias.php" >Generos</a>
        </li>
          <li class="nav-item">
          <a class="nav-link active" href="category.php?genero=estrenos" >Estrenos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="catalogo.php" >Catálogo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="contacto.html">Contacto</a>
        </li>
      </ul>
      <form action="resultados.php" method="GET" class="form-inline mt-2 mt-md-0">
        <input name="name" class="form-control mr-sm-2" type="text" placeholder="Buscar (titulo o año)" aria-label="Search">
        <button class="btn btn-info my-2 my-sm-0" type="submit">Buscar</button>
      </form>
      <div class="d-md-none mt-2">
 <a href="#" class=""><i class="fab fa-facebook-f fa-2x"></i></a>
 <a href="" class="ml-3"><i class="fab fa-twitter fa-2x"></i></a>
 <a href="" class="ml-3"><i class="fab fa-instagram fa-2x"></i></a>
 <a href="" class="ml-3"><i class="fab fa-youtube fa-2x"></i></a>
 <a href="" class="ml-3"><i class="fab fa-google-plus-g fa-2x"></i></a>
 </div>
    </div>
  </nav>

<!-- fin de navbar -->

    


    <!-- inicio de vista de peliculas -->
<div class="container-fluid mt-5"  id="a">
        <h4 class="d-none d-md-block letra">Categoria: <?php echo $asociativo['genero'] ?></h4>
        <h5 class="d-md-none letra">Categoria: <?php echo $asociativo['genero'] ?></h5>
    <div class="row">
    <?php foreach($listado5 as $dato): ?> 
        <div class="col-4 col-sm-3 col-md-2 p-1"><div class = "hovereffect"><a href="pelicula.php?titulo=<?php echo $dato['titulo'] ?>"><img class=" img-fluid" src = "<?php echo $dato['imagen'] ?>" alt = ""><div class = "overlay"><h4><?php echo $dato['titulo'].'<br>'.'('.$dato['anio'].')'; ?> </h4></div></a></div></div>
        <?php endforeach ?>
    </div>
</div>
<!-- inicio de vista de peliculas -->

 
  <!--inicio de botones -->
  <nav aria-label="page navigation example">
        <ul class="pagination justify-content-center mt-4">
            <li class="page-item" > <?php $paginacion->render(); ?></li>
            
            
        </ul>

    </nav>
      <!-- fin de botones -->











  <!-- inicio footer pc-->
 
    <footer class="footer text-white d-none d-lg-block">
          <div class="container">
             <div class="container-fluid">
                  <div class="row">
                      <div class="col-12 mt-2">
                             <a href="#" class=""><i class="fab fa-facebook-f fa-2x"></i></a>
                             <a href="" class="ml-1"><i class="fab fa-twitter fa-2x"></i></a>
                             <a href="" class="ml-1"><i class="fab fa-instagram fa-2x"></i></a>
                             <a href="" class="ml-1"><i class="fab fa-youtube fa-2x"></i></a>
                             <a href="" class="ml-1"><i class="fab fa-google-plus-g fa-2x"></i></a>
                        </div>
                       </div>
                      </div>
            <p class=" text-white mt-3">si tienes un problema, sugerencia, critica, lo que sea, informelo estamos dispuestos a mejorar para su mejor mejor comodida y ser su pagina preferida de peliculas y series.  <a href="contacto.html"> CONTACTO</a></p>
            <p>	 © 2018 SuperPelis</p>
            <p>No se reproduce ni se almacenan archivos en nuestros servidores, El contenido almacenado en esta web se encuetra almacenda en servidores externos.</p>
          </div>
      </footer>
  <!-- fin footer pc-->

    <!-- inicio footer tablet-->

    <footer class="footer2 text-white d-none d-sm-block d-lg-none">
          <div class="container">
             <div class="container-fluid">
                  <div class="row">
                      <div class="col-12 mt-2">
                             <a href="#" class=""><i class="fab fa-facebook-f fa-2x"></i></a>
                             <a href="" class="ml-1"><i class="fab fa-twitter fa-2x"></i></a>
                             <a href="" class="ml-1"><i class="fab fa-instagram fa-2x"></i></a>
                             <a href="" class="ml-1"><i class="fab fa-youtube fa-2x"></i></a>
                             <a href="" class="ml-1"><i class="fab fa-google-plus-g fa-2x"></i></a>
                        </div>
                       </div>
                      </div>
            <p class=" text-white mt-3">si tienes un problema, sugerencia, critica, lo que sea, informelo estamos dispuestos a mejorar para su mejor mejor comodida y ser su pagina preferida de peliculas y series.  <a href="contacto.html"> CONTACTO</a></p>
            <p>	 © 2018 SuperPelis</p>
            <p>No se reproduce ni se almacenan archivos en nuestros servidores, El contenido almacenado en esta web se encuetra almacenda en servidores externos.</p>
          </div>
      </footer>
  <!-- fin footer tablet-->

  <!-- inicio footer movil-->
 
  
    <footer class="footer3 text-white d-sm-none">
          <div class="container">
             <div class="container-fluid">
                  <div class="row">
                      <div class="col-12 mt-2">
                             <a href="#" class=""><i class="fab fa-facebook-f fa-2x"></i></a>
                             <a href="" class="ml-1"><i class="fab fa-twitter fa-2x"></i></a>
                             <a href="" class="ml-1"><i class="fab fa-instagram fa-2x"></i></a>
                             <a href="" class="ml-1"><i class="fab fa-youtube fa-2x"></i></a>
                             <a href="" class="ml-1"><i class="fab fa-google-plus-g fa-2x"></i></a>
                        </div>
                       </div>
                      </div>
            <p class=" text-white mt-3">si tienes un problema, sugerencia, critica, lo que sea, informelo estamos dispuestos a mejorar para su mejor mejor comodida y ser su pagina preferida de peliculas y series.  <a href="contacto.html"> CONTACTO</a></p>
            <p>	 © 2018 SuperPelis</p>
            <p>No se reproduce ni se almacenan archivos en nuestros servidores, El contenido almacenado en esta web se encuetra almacenda en servidores externos.</p>
          </div>
      </footer>
  <!-- fin footer movil-->







 <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/jquery-3.3.1.slim.min.js"></script>
</body>
</html>

