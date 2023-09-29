<!doctype html>
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

  <title>Planificaci&oacute;n del curso</title>

  <style>
    body {
      font-family: 'Urbanist', sans-serif;
      background: #f2f2f2;
    }

    .fondo {
      background: #FFFFFF;
    }

    .celdas_principales {
      background: #003366;
      color: #FFF;
    }
  </style>

</head>

<body>
<?php $id_maestro = $_GET["id_maestro"]?>
  <form name="valuate" method="post" action="../insertarEval.php">
  <input type="hidden" value="<?= $id_maestro?>" name="id_maestro"> <!-- Captura el id de maestro -->

  <script>
            addEventListener('load',inicio,false);
            function inicio(){
              document.getElementById('vol1').addEventListener('change', desbloqueo, false);
              document.getElementById('vol2').addEventListener('change', desbloqueo, false);
              document.getElementById('vol3').addEventListener('change', desbloqueo, false);

            }

            function desbloqueo(){
              document.getElementById('save').disabled = false;
            }
    </script>



<!-- el valor de este input es el que se usara para meterlo en el campo del mismo nombre de la base de datos -->
<input type="hidden" value="planificacion" name="categoria">
    <div class="container-fluid mt-4">
      <table width="685" class="table table-bordered border-dark">
        <thead>
          <tr class="celdas_principales">
            <th scope="col">Planificaci&oacute;n del curso</th>
            <th width="160" class="text-center" scope="col">Debe mejorar</th>
            <th width="150" class="text-center" scope="col">Puede mejorar</th>
            <th width="130" class="text-center" scope="col">Adecuado</th>
            <th width="150" class="text-center" scope="col">Bien</th>
            <th width="160" class="text-center" scope="col">Excelente</th>
          </tr>
        </thead>
        <tbody class="fondo">
          <tr>
            <td width="709">Cumple con los acuerdos establecidos al inicio de la asignatura.</td>
            <td colspan="10" width="160"><input type="range" class="form-range" min="20" max="100" step="20" id="vol1" name="vol1"></td>
          </tr>
          <tr>
            <td>Durante el curso establece las estrategias adecuadas necesarias para lograr el aprendizaje deseado.</td>
            <td colspan="10"><input type="range" class="form-range" min="20" max="100" step="20" id="vol2" name="vol2"></td>
          </tr>
          <tr>
            <td>El programa presentado al principio de la asignatura se cubre totalmente.</td>
            <td colspan="10"><input type="range" class="form-range" min="20" max="100" step="20" id="vol3" name="vol3"></td>
          </tr>
          <tr>
        </tbody>
      </table>

      <div class="d-grid gap-2 d-md-flex justify-content-end">
        <a href="Dominio_asignatura.php?id_maestro=<?= $id_maestro?>">
          <button class="btn btn-primary btn-sm" type="button">Anterior</button>
        </a>
        <a href="Ambientes_aprendizaje.php?id_maestro=<?= $id_maestro?>">
          <button class="btn btn-primary btn-sm" type="button">Siguiente</button>
        </a>
      </div>

      <p>&nbsp;</p>
      <div align="right">
        <button class="btn btn-dark btn-sm" id="save" disabled type="submit">Guardar</button>
      </div>

    </div>
  </form>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>