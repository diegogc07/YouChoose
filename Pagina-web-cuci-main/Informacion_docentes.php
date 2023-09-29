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
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="sweetalert2.all.min.js"></script>

  <title>Información Docentes</title>


  <style>
    
    <?php if (isset($_SESSION['usuario'])) {
      $color = '#08CC0A';
    } else {
      $color = '#CC0808';
    }
    ?>body {
      font-family: 'Urbanist', sans-serif;
    }

    .comentarios {
      margin: 20px 0;
    }

    .form_comentarios textarea {
      width: 100%;
      height: 84px;
      max-width: 100%;
      min-width: 100%;
      min-height: 84px;
      max-height: 150px;
      padding: 10px;
      line-height: 30px;
      border: 1px solid #4b65d1;
      margin-bottom: 10px;
    }

    .form_comentarios .btn {
      background: #4b65d1;
      border-radius: 0;
      color: #FFFFFF;
      margin-bottom: 20px;
    }

    .form_comentarios .btn:hover {
      box-shadow: 0px 0px 9px rgba(0, 0, 0, .35);
    }

    .evaluar .btn {
      background: <?= $color ?>;
      border-radius: 0;
      color: #FFFFFF;
    }

    .evaluar .btn:hover {
      box-shadow: 0px 0px 9px rgba(0, 0, 0, .35);
    }

    .fondo_inferior {
      background: #f2f2f2;
      padding-bottom: 0.1px;
    }

    .color-celdas {
      background: #003366;
      color: #FFF;
    }

    .color-celdas-n2 {
      background: #003366;
      color: #FFF;
    }

    .contenedor-comentarios{
      position: relative;
      width: 625px;
      height: 90px;
      overflow: hidden;
      padding: 10px;
      border: 1px solid #4b65d1;
      border-radius: 12px 12px 12px 12px;
    }

    .line {
      width: 100%;
      margin: 0 auto;
      height: 1px;
      background: #200122;
      margin-bottom: 12px;
    }

    .eliminar{
      position: absolute;
      left: 547px;
    }
    
    
  </style>
  

  <?php
  if(!isset($_GET['firstname']) || !isset($_GET['lastname'])){
    header('location: main.php');
  }
  include("conectar.php");
  $nombre = $_GET['firstname'];
  $apellido = $_GET['lastname'];

  $consultaSkills = "SELECT maestros.nombre, maestros.apellido, skills.skill
  FROM maestros, skills, maestros_skills
  WHERE (maestros.id_maestros = maestros_skills.id_maestro)
  AND (skills.id_skill = maestros_skills.id_skill)
  AND (maestros.nombre LIKE '%$nombre%')
  AND (maestros.apellido LIKE '%$apellido%')";

  $ejecutar_consulta3 = $conexion->query($consultaSkills);

  $consultaIDMaestro = "SELECT id_maestros
  FROM maestros
  WHERE nombre LIKE '%$nombre%'
  AND apellido LIKE '%$apellido%'";

  $ejecutar_consulta2 = $conexion->query($consultaIDMaestro);
  while ($registro2 = $ejecutar_consulta2->fetch_assoc()) {
    $maestroID = $registro2['id_maestros'];
  }

  $consulta = "SELECT maestros.nombre, maestros.apellido, materias.nombre AS materia, materias.clave_materias AS clave
  FROM maestros, materias, materias_maestros
  WHERE (maestros.id_maestros = materias_maestros.id_maestros)
  AND (materias.clave_materias = materias_maestros.clave_materias)
  AND (maestros.nombre LIKE '%$nombre%')
  AND (maestros.apellido LIKE '%$apellido%')";

  $ejecutar_consulta = $conexion->query($consulta);
  ?>


</head>

<body>


  <div class="container-fluid w-75">
    <div class="text-center">
      <img src="imagenes/Icono de persona.png" width="300" height="300" class="rounded mt-3" alt="Foto">
    </div>
  </div>

  <div class="fondo_inferior">
    <div class="container-fluid w-75">
      <table class="table table-bordered border-dark text-center mt-4">
        <thead>
          <tr class="color-celdas">
            <th width="200" scope="col">Nombre del maestro(a)</th>
            <th width="200" scope="col">Áreas de especialización</th>
            <th width="200" scope="col">Promedio general</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="table-light"><?= $_GET['firstname'] . " " . $_GET['lastname'] ?></td>
            <td align="left" class="table-light">

              <?php

              while ($registro = $ejecutar_consulta3->fetch_assoc()) : ?>
                <?php $skill = $registro['skill']; ?>

                * <?= $skill ?><br>
              <?php endwhile; ?>

            </td>
            <?php if ($_GET['calificacion'] == 0) {
              $calificacion = 'Aun sin evaluar';
            } else {
              $calificacion = $_GET['calificacion'];
            } 
            
            ?>
            <td class="table-light"><?= $calificacion ?><br><a href="Promedios_individuales.php?id_maestros=<?= $maestroID ?>">Más detalles...</a></td>
          </tr>
        </tbody>
      </table>

      <table width="616" class="table table-bordered border-dark text-center mt-5">
        <thead>
          <tr class="color-celdas-n2">
            <th width="200" scope="col">Clave</th>
            <th width="404" scope="col">Materias Impartidas</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($registro = $ejecutar_consulta->fetch_assoc()) : ?>

            <?php
            $materia = $registro['materia'];
            $clave = $registro['clave'];
            ?>

            <tr>
              <td class="table-light"><?= $clave ?></td>
              <td class="table-light"><a href="Informacion_materias.php?materia=<?= $materia ?>&clave=<?= $clave ?>"><?= $materia ?></a></td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>

      <!-- Si el alumno no se encuentra logueado no podrá ingresar a evaluar -->
      <?php if (isset($_SESSION['usuario'])) {
        $bloqueo = '';
        $ref = 'Puntos_evaluacion.php?id_maestro='.$maestroID;
      } else {
        $bloqueo = 'disabled';
        $ref = '';
      }
      ?>
      <form class="evaluar">
        <div align="right"><a href=<?= $ref ?>>
            <button type="button" <?= $bloqueo ?> class="btn">Evaluar</button>
          </a></div>
      </form>
    </div>
    <!-- =================================================================== -->

    <p>&nbsp;</p>

    <!-- Si el alumno no se encuentra logueado no podrá comentar -->
    <div class="container">
      <div class="row comentarios justify-content-center">
        <div class="col-6">
          <?php
          if (isset($_SESSION['usuario'])) {
            $bloqueo = '';
            $warning = 'Añadir un comentario...';
          } else {
            $bloqueo = 'disabled';
            $warning = 'Debes iniciar sesión para poder comentar';
          }
          ?>
          <form method="post" action="" class="form_comentarios d-flex justify-content-end flex-wrap">
            <textarea name="comentario" id="" <?= $bloqueo ?> placeholder="<?= $warning ?>"></textarea>
          <button class="btn" name="comentar" type="submit" onclick=" alert('¡Comentario registrado con éxito! \nRecuerda realizar comentarios a conciencia ya que la información será para beneficio de los demás estudiantes.')">Comentar</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- =========================================================== -->

  <?php
  //== Ingresa el comentario ==|
  // NOW es una funcion de PHP que obtiene la fecha actual
  if (isset($_POST['comentar']) && !empty($_POST['comentario'])) {
    $insertar = 'INSERT INTO comentarios (comentario, usuario, fecha, id_maestro)
    VALUE ("' . $_POST['comentario'] . '", "' . $_SESSION['id'] . '", NOW(), "' . $maestroID . '")';

    $ejecutar_insertar = $conexion->query($insertar);
  }
  //===========================|
  ?>

  <?php

  //Selecciona todos los comentarios que son para el maestro actual
  $comentarios = "SELECT *
FROM comentarios
WHERE id_maestro = $maestroID
ORDER BY id";

  $ejecutar_consulta = $conexion->query($comentarios);
  while ($registro = mysqli_fetch_array($ejecutar_consulta)) {

    //Selecciona los nombres de los alumnos que correspondan a cada comentario
    $alumno = "SELECT *
  FROM alumnos
  WHERE codigo = '" . $registro['usuario'] . "'";

    //Selecciona el comentario y la fecha en que se realizó
    $fecha = $registro['fecha'];
    $comentario = $registro['comentario'];
    $id = $registro['id'];

    $ejecutar_consulta2 = $conexion->query($alumno);
    $user = mysqli_fetch_array($ejecutar_consulta2);
  ?>
    <!-- Imprime todos los comentarios del maestro.-->
    
    
    <div class="container-fluid contenedor-comentarios shadow-sm mt-4">
    <div class="mt-1">
        <header>
          
            <?= $user['nombre'] ?>
           -
          <span class="pubdate">
            <small><span class="text-muted"><?= $fecha ?></span></small>
            <?php if($user['nombre'] == $_SESSION['usuario']):?>
            <a class="eliminar" href="eliminarComent.php?usuario=<?= $_SESSION['usuario'] ?>&id=<?= $id?>">[Eliminar]</a>
            <?php endif;  ?>
          </span>
          <div class="line"></div>
        </header>
        </div>
        <div class="comentarios-contenido">
        <p>
          <?= $comentario ?>
        </p>
      </div>
    </div>
    <p>&nbsp;</p> 

  <?php
  }
  ?>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>