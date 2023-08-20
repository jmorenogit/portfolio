<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mensaje enviado</title>
  </head>
  <body>
    <nav>
      <?php
        include("menu.php");
      ?>
    </nav>

    <div class="container text-center">

      <br>
      
      <?php
        $para = "jomanugo@gmail.com";
        $correo = $_POST['emailInput'];
        $titulo = $_POST['asuntoInput'];
        $mensaje = $_POST['mensajeInput'];
        $cabecera = "From:" . $correo;

        $enviado = mail($para, $titulo, $mensaje, $cabecera);

        if ($enviado){
            echo "<div class='row'>";
            echo "<div class='col'>";
            echo "<h1>Mensaje enviado.</h1>";
            echo "</div>";
            echo "</div>";
        }

        ?>
    
      
       

    </div>
  
  </body>
</html>