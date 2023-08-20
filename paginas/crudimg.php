<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jmorenodevs</title>
  </head>
  <body>
    <nav>
      <?php
        include("menu.php");
      ?>
    </nav>

    <br>    
  
    <div class="container text-center">  
      <div class="row align-items-start">
        <div class="col">
          <h4>Crud con imágenes</h4>
        </div>
        <div class="col">
          Desarrollado en Laravel Jetstream, Tailwind CSS y MySQL.
        </div>
        <div class="col">
          <a href="https://github.com/jmorenogit/crud_img.git" class="btn btn-primary">Ir a GitHub</a>
        </div>
      </div>  
    </div>

    <br>

    <!--Carrusel-->
  <div class="container text-center">

    <div id="carouselCrudimg" class="carousel slide" data-bs-theme="dark" aling="center">

      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselCrudimg" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselCrudimg" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselCrudimg" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselCrudimg" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselCrudimg" data-bs-slide-to="4" aria-label="Slide 5"></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/portfolio/imagenes/crudimgListar.png" class="d-block w-100" alt="Listar"> 
        </div>
        <div class="carousel-item">
          <img src="/portfolio/imagenes/crudimgCrear.png" class="d-block w-100" alt="Añadir">
        </div>
        <div class="carousel-item">
          <img src="/portfolio/imagenes/crudimgEditar.png" class="d-block w-100" alt="Editar">
        </div>
        <div class="carousel-item">
          <img src="/portfolio/imagenes/crudimgEliminar.png" class="d-block w-100" alt="Editar">
        </div><div class="carousel-item">
          <img src="/portfolio/imagenes/crudimgLogin.png" class="d-block w-100" alt="Editar">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselCrudimg" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselCrudimg" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>

    </div>
    
  </div> 
  </div>
  </div>  

  </body>
</html>