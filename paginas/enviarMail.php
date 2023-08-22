<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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
        $cabecera = "From:" . $correo . "\r\n";
        $cabecera .= "Mime-Version: 1.0\r\n";
        $cabecera .= "Content-Type: text/plain;\r\n";

        $enviado = mail($para, $titulo, $mensaje, $cabecera);

        if ($enviado){
            echo "<div class='row'>";
            echo "<div class='col'>";
            echo "<h1>Mensaje enviado.</h1>";
            echo "</div>";
            echo "</div>";
        }else
        {
            echo "<div class='row'>";
            echo "<div class='col'>";
            echo "<h1>Error de envío.</h1>";
            echo "</div>";
            echo "</div>";
        }

        ?>
    
      <a class="btn btn-warning" href="/index.php">Volver</a>
       

    </div>
  
  </body>
</html>