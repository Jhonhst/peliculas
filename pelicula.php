<?php include_once 'conexion.php';
      include_once 'llamadapelicula.php';
      include_once 'portadaapeli.php';

?>
<!-- este if me dice que si llega algun dato mediante un git en tonces muestra todo el contenido -->
<?php if($_GET): ?>

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

 
    <title>Ver Pelicula <?php echo $reg['titulo']; ?> Online Gratis Full HD <?php switch($reg['idioma']){case 'espaniol': echo "Español latino";break;case 'subespaniol': echo "Sub español";break;case 'espanioles': echo "Español";break;}?>   </title>
</head>
<body style="background-color: rgb(0, 0, 0);">
    <!-- inicio de navbar -->
    <div class="fondo" style="background-image: url(<?php echo $reg['imagenho']; ?>);" >
        <!-- style="background-image: url(img/venga2.jpg)"; -->
        
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
   <!--fin de navbar de la p inicio -->
    

    <!-- informacion de la pelicula -->
    <!-- coloque los datos de la base datos la mayoria a eseccion de categorias -->
<div class="container-fluid mt-3">
    <div class="row">
            <div class="d-none d-md-block col-md-3 mt-5 "><img src="<?php echo $reg['imagen']; ?>" alt="" class="img-fluid bordee"></div>
            <div class="col-xs-12 d-md-none  mt-3 bordee"><img src="<?php echo $reg['imagenho']; ?>" alt="" class="img-fluid bordee" style="position: relative;"></div>
            <div class="col-md-9 col-lg-9" >

            <div class="col-xs-12 col-lg-12 mt-5 "> 
                <div class="datos datostablet bordee">
                <h3> <strong><?php echo $reg['titulo']; ?></strong> </h3>
                <p> <strong>Año:</strong> <?php echo $reg['anio']; ?></p>
                <p> <strong>Duración:</strong> <?php echo $reg['duracion']; ?> min</p>
                <p> <strong>Idioma:</strong> <?php switch($reg['idioma']){case 'espaniol': echo "Español latino";break;case 'subespaniol': echo "Sub español";break;case 'espanioles': echo "Español";break;}?></p>
                <p > <strong>genero:</strong>  <?php 
               while($rege=mysqli_fetch_array($resultados))
                 {   echo " ";
                  echo $rege['genero']; }
                 ?></p>
                <p> <strong>sinopsis:</strong></p>
                    <p class="d-none d-lg-block col-lg-12"><?php echo $reg['sinopsis']; ?></p>
                    <p class="d-lg-none cortarmovil"><?php echo $reg['sinopsis']; ?></p>
                </div>
<!-- Button trigger modal -->

<button type="button" class="btn btn-danger video-btn borde" data-toggle="modal" data-src="https://www.youtube.com/embed/<?php echo $reg['trailer'];?>" data-target="#myModal" >
    Ver trailer
  </button>
    
     <!-- Button trigger modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
<div class="modal-dialog" role="document">
      <div class="modal-content">
      
        
        <div class="modal-body" >
  
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>        
          <!-- 16:9 aspect ratio -->
  <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>></iframe>
    
  </div>
          
        </div>
  
      </div>
    </div>
  </div> 
<!-- fin del modal2 -->
        </div>
    </div>
            
        </div>
    </div>
    <!-- fin de sipnosis -->
    
<!--fin de informacion de la pelicula -->

<!-- reproduccion de la peli -->
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-lg-9 mt-3 media ">
             <video class="bordee" controls poster="" width="100%" height="100%" style"absolute" preload="auto">
                <source src="<?php echo $reg['video']; ?>" type="video/mp4" class="bordee" >
                Lo siento, tu navegador no soporta ninguno de los formatos.
            </video>
        </div>
        <div class="d-none d-lg-block col-lg-3">
                <div class="container">
                    <h1>compartir</h1>
                        <a href="">FACEBOOK</a><hr>
                        <a href="">TWITER</a><hr>
                        <a href="">WHATSAPP</a>
                 </div>
        </div>
    </div>
</div>

<!--fin de reproduccion de la peli -->

<!--inicio de redes para compartir -->
<div class="container">
    <a href="">FACEBOOK</a>
    <a href="">TWITER</a>
    <a href="">WHATSAPP</a>
</div>
<!--fin de redes para compartir -->





</div>

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
  <script src="js/bootstrap-4-latest.min.js"></script>
  <!-- inicio de esto es para el modal del trailer -->
	
    <script>
  
  
      $(document).ready(function() {
  
  // Gets the video src from the data-src on each button
  
  var $videoSrc;  
  $('.video-btn').click(function() {
      $videoSrc = $(this).data( "src" );
  });
  console.log($videoSrc);
  
    
    
  // when the modal is opened autoplay it  
  $('#myModal').on('shown.bs.modal', function (e) {
      
  // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
  $("#video").attr('src',$videoSrc + "?rel=0&amp;showinfo=0&amp;modestbranding=1&amp;autoplay=1" ); 
  })
    
    
  // stop playing the youtube video when I close the modal
  $('#myModal').on('hide.bs.modal', function (e) {
      // a poor man's stop video
      $("#video").attr('src',$videoSrc); 
  }) 
      
      
  
  
    
    
  // document ready  
  });
  </script>
  <!-- fin de esto es para el modal del video -->
</body>
</html>

<?php endif ?>

<!-- si no llega nada midiante el metodo git redirecciona a la principal -->
<?php if(!$_GET){
header('location:portada.php');
}

?>

<!-- si no llega nada midiante el metodo git redirecciona a la principal -->

