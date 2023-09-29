<!doctype html>
<?php session_start(); ?>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Urbanist&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/61d3958439.js" crossorigin="anonymous"></script>

  <title>Perfil alumno</title>

  <style>
    body {
      font-family: 'Urbanist', sans-serif;

    }

    .Perfil-usuario img {
      width: 100%;
    }

    .Perfil-usuario .contenedor-portada {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 90%;
      border-radius: 0 0 12px 12px;
    }

    .Perfil-usuario .Portada {
      background-image: url(imagenes/fondo-perfil.jpg);
      background-position: center;
      background-repeat: no-repeat;
      position: relative;
      background-size: 1380px 320px;
      height: 20rem;
      border-radius: 0 0 12px 12px;
    }

    .Contenedor-usuarios {
      background: #f2f2f2;
      margin-left: auto;
      margin-right: auto;
      width: 90%;
      height: 11rem;
      border-radius: 12px 12px 12px 12px;
    }

    .nombre {
      position: absolute;
      left: 12%;
      top: 74%
    }

    .nom-usuario {
      position: absolute;
      left: 193px;
      top: 78%
    }

    .codigo {
      position: absolute;
      left: 36%;
      top: 74%
    }

    .cod-usuario{
      position: absolute;
      left: 545px;
      top: 78%
    }

    .correo {
      position: absolute;
      left: 60%;
      top: 74%;
    }

    .corr-usuario{
      position: absolute;
      left: 843px;
      top: 78%
    }

    .carrera {
      position: absolute;
      left: 83%;
      top: 74%;
    }

    .carr-usuario{
      position: absolute;
      left: 1288px;
      top: 78%
    }

    
  </style>


</head>

<body>
  <?php
  include('conectar.php');
  $consulta = "SELECT correo, carrera
      FROM alumnos
      WHERE codigo = '" . $_SESSION['id'] . "'";

  $ejecutar_consulta = $conexion->query($consulta);
  while ($registro = $ejecutar_consulta->fetch_assoc()) {
    $correo = $registro['correo'];
    $carrera = $registro['carrera'];
  }
  ?>

  <section class="Perfil-usuario">
    <div class="contenedor-portada">
      <div class="Portada">
      </div>
    </div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>

    <div class="Contenedor-usuarios shadow">
      <p>&nbsp;</p>
      <h5 class="nombre">Nombre</h5>
      <h5 class="codigo">Código</h5>
      <h5 class="correo">Correo</h5>
      <h5 class="carrera">Carrera</h5>

      <h5 class="nom-usuario"><?= $_SESSION['usuario'] ?></h5>
      <h5 class="cod-usuario"><?= $_SESSION['id'] ?></h5>
      <h5 class="corr-usuario"><?= $correo ?></h5>
      <h5 class="carr-usuario"><?= $carrera ?></h5>

    </div>
  </section>








  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>