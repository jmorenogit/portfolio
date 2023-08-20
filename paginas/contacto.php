<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>contacto</title>
  </head>
  <body>
    <nav>
      <?php
        include("menu.php");
      ?>
    </nav>

    <div class="container text-center">

      <br>

      <div class="row">
        <div class="col">
            <h4>Contacto</h4>
            <p>Formulario para contactar conmigo por email</p>
        </div>
      </div>

      <br>
      
      <form action="mailto:jomanugo@gmail.com" method="post" enctype="text/plain">
          <div class="mb-3">
            <label for="emailInput" class="form-label">Email</label>
            <input type="email" class="form-control" id="emailInput" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="asuntoInput" class="form-label">Asunto</label>
            <input type="text" class="form-control" id="asuntoInput" placeholder="escriba el asunto aquí...">
          </div>
          <div class="mb-3">
            <label for="mensajeInput" class="form-label">Mensaje</label>
            <textarea class="form-control" id="mensajeInput" rows="3" placeholder="escriba su mensaje aquí..."></textarea>
          </div>
          <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
          </div>
      </form>

    </div>
    
    
  </body>
</html>