<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Urbanist&display=swap" rel="stylesheet">

    <title>Promedios individuales</title>

    <style>

        body{
            font-family: 'Glory', sans-serif;
        }

        .promedio{
            text-align: center;
        }

        .celdas_principales{
            background: #003366;
            color: #FFF;
            text-align: center;
        }

    </style>

<?php 
include("conectar.php");

$id_maestro = $_GET["id_maestros"];

$consulta = "SELECT TRUNCATE (AVG(dominio), 0) AS dominio, TRUNCATE (AVG(planificacion), 0) AS planificacion, TRUNCATE (AVG(ambientes), 0) AS ambientes,
TRUNCATE (AVG(estrategias), 0) AS estrategias, TRUNCATE (AVG(motivacion), 0) AS motivacion, TRUNCATE (AVG(evaluacion), 0) AS evaluacion, TRUNCATE (AVG(comunicacion), 0) AS comunicacion,
TRUNCATE (AVG(gestion), 0) AS gestion, TRUNCATE (AVG(tecnologias), 0) AS tecnologias, TRUNCATE (AVG(general),0) AS general
FROM evaluacion 
WHERE id_maestro LIKE '%$id_maestro%'";
$ejecutar_consulta = $conexion->query($consulta);

?>




</head>

  <body>

  <?php while($promedio = $ejecutar_consulta->fetch_assoc()) : ?>
  <?php
  $dom = $promedio['dominio'];
  $plan = $promedio['planificacion'];
  $amb = $promedio['ambientes'];
  $est = $promedio['estrategias'];
  $mot = $promedio['motivacion'];
  $eva = $promedio['evaluacion'];
  $com = $promedio['comunicacion'];
  $ges = $promedio['gestion'];
  $tec = $promedio['tecnologias'];
  $gen = $promedio['general'];
  ?>
    
  <table class="table table-bordered border-dark container-fluid w-75 mt-5">
        <thead>
          <tr class="celdas_principales">
            <th scope="col">Categoria</th>
            <th scope="col">Promedio</th>
          </tr>
        </thead>
        <tbody class="fondo">
          <tr>
            <td>Dominio de la asignatura</td>
            <td class="promedio"><?= $dom ?></td>
          </tr>
          <tr>
            <td>Planificación del curso</td>
            <td class="promedio"><?= $plan ?></td>
          </tr>
          <tr>
            <td>Ambientes de aprendizaje</td>
            <td class="promedio"><?= $amb ?></td>
          </tr>
          <tr>
            <td>Estrategias, métodos y técnicas</td>
            <td class="promedio"><?= $est ?></td>
          </tr>
          <tr>
            <td>Motivación</td>
            <td class="promedio"><?= $mot ?></td>
          </tr>
          <tr>
            <td>Evaluación</td>
            <td class="promedio"><?= $eva ?></td>
          </tr>
          <tr>
            <td>Comunicación</td>
            <td class="promedio"><?= $com ?></td>
          </tr>
          <tr>
            <td>Gestión del curso</td>
            <td class="promedio"><?= $ges ?></td>
          </tr>
          <tr>
            <td>Tecnologías de la información y comunicación</td>
            <td class="promedio"><?= $tec ?></td>
          </tr>
          <tr>
            <td>Satisfacción general</td>
            <td class="promedio"><?= $gen ?></td>
          </tr>
        </tbody>
      </table>

      <?php endwhile; ?>
     


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>