<!doctype html>
<?php session_start()?>
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

  <title>Información materias</title>

  <style>
    body {
      font-family: 'Urbanist', sans-serif;
      background: #f2f2f2;
    }

    .color-celdas {
      background: #003366;
      color: #FFF;
    }

    .color-celdas-n2 {
      background: #003366;
      color: #FFF;
    }
  </style>
  <?php
  include('conectar.php');
  $materia = $_GET['materia'];
  $clave = $_GET['clave'];

  $consulta_maestros = "SELECT materias.nombre AS materia, maestros.nombre, maestros.apellido, maestros.correo, maestros.calificacion
    FROM materias, maestros, materias_maestros
    WHERE (maestros.id_maestros = materias_maestros.id_maestros)
    AND (materias.clave_materias = materias_maestros.clave_materias)
    AND (materias.nombre LIKE '%$materia%')";

  $ejecutar_consulta = $conexion->query($consulta_maestros);
  ?>

</head>

<body>

  <div class="container-fluid w-75">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <table class="table table-bordered border-dark text-center mt-4">
      <thead>
        <tr class="color-celdas">
          <th width="200" scope="col">Nombre de la materia</th>
          <th width="200" scope="col">Clave</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="table-light"><?= $materia ?></td>
          <td class="table-light"><?= $clave ?></td>
        </tr>
      </tbody>
    </table>

    <table width="616" class="table table-bordered border-dark text-center mt-5 ">
      <thead>
        <tr class="color-celdas-n2">
          <th width="200" scope="col">Impartida por</th>
          <th width="200" scope="col">Correo electrónico</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($registro = $ejecutar_consulta->fetch_assoc()): ?>

          <?php
          $maestro = $registro['nombre'] . " " . $registro['apellido'];
          $correo = $registro['correo'];
          $calificacion = $registro['calificacion'];
          ?>

          <tr>
            <td class="table-light"><a href="Informacion_docentes.php?firstname=<?= $registro['nombre']?>&lastname=<?= $registro['apellido']?>&calificacion=<?= $calificacion?>"><?= $maestro ?></a></td>
            <?php if(isset($_SESSION['usuario'])){

              } else {
                $correo = 'X';
              }
              ?>
            <td class="table-light"><?= $correo ?></td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>



  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>