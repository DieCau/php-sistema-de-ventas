<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bienvenido al Sistema de Ventas</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    video {
      min-width: 100%;
      min-height: 100%;
      width: auto;
      height: auto;

      position: fixed;
      top: 50%;
      left: 50%;
      z-index: -100;
      transform: translateX(-50%) translateY(-50%);
      background-size: cover";

    }

    .capa {
      min-width: 100%;
      min-height: 100%;
      width: auto;
      height: auto;

      position: fixed;
      top: 50%;
      left: 50%;
      transform: translateX(-50%) translateY(-50%);
      background-color: rgba(0, 0, 0, 0.2);
    }
  </style>
</head>

<body>

  <video autoplay loop muted preload="auto"> 
  <source src="./public/videos/portada.mp4" type="video/mp4">
</video>

  <div class="capa text-center text-white h1">
    <br>
    <br>
    <b>BIENVENIDO AL SISTEMA DE VENTAS</b>

    <!-- <div id="content"> -->
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./public/images/transparente.png" class="d-block w-30" height="600px" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h4>Soluciones Tecnologicas</h4>
              <p>Somos el servicio que necesitas</p>
             
            </div>
          </div>
          <div class="carousel-item">
            <img src="./public/images/transparente.png" class="d-block w-30" height="600px" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h4>Logistica en Movimiento</h4>
              <p>La solucion para tu negocio</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./public/images/transparente.png" class="d-block w-30" height="600px" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h4>Pensando en tu futuro</h4>
              <p>El futuro de tu empresa</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <a href="./login/" class="btn btn-primary btn-lg">Ingresar...</a>
    </div>
  <!-- </div> -->


</body>

</html>