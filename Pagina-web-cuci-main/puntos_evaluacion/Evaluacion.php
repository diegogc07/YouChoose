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

  <title>Evaluaci&oacute;n</title>

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
              document.getElementById('vol4').addEventListener('change', desbloqueo, false);
              document.getElementById('vol5').addEventListener('change', desbloqueo, false);
              document.getElementById('vol6').addEventListener('change', desbloqueo, false);
              document.getElementById('vol7').addEventListener('change', desbloqueo, false);
              document.getElementById('vol8').addEventListener('change', desbloqueo, false);

            }

            function desbloqueo(){
              document.getElementById('save').disabled = false;
            }
    </script>


  
<!-- el valor de este input es el que se usara para meterlo en el campo del mismo nombre de la base de datos -->
<input type="hidden" value="evaluacion" name="categoria">
    <div class="container-fluid mt-4">
      <table class="table table-bordered border-dark">
        <thead>
          <tr class="celdas_principales">
            <th scope="col">Evaluaci&oacute;n</th>
            <th width="160" class="text-center" scope="col">Debe mejorar</th>
            <th width="150" class="text-center" scope="col">Puede mejorar</th>
            <th width="130" class="text-center" scope="col">Adecuado</th>
            <th width="150" class="text-center" scope="col">Bien</th>
            <th width="160" class="text-center" scope="col">Excelente</th>
          </tr>
        </thead>
        <tbody class="fondo">
          <tr>
            <td width="709">Identifica los conocimientos y habilidades de los estudiantes al inicio de la asignatura o de cada unidad.</td>
            <td colspan="10" width="328"><input type="range" class="form-range" min="20" max="100" step="20" id="vol1" name="vol1"></td>
          </tr>
          <tr>
            <td>Proporciona informaci&oacute;n para realizar adecuadamente las actividades de evaluaci&oacute;n.</td>
            <td colspan="10"><input type="range" class="form-range" min="20" max="100" step="20" id="vol2" name="vol2"></td>
          </tr>
          <tr>
            <td>Toma en cuenta las actividades realizadas y los productos como evidencias para la calificaci&oacute;n y acreditaci&oacute;n de la asignatura.</td>
            <td colspan="10"><input type="range" class="form-range" min="20" max="100" step="20" id="vol3" name="vol3"></td>
          </tr>
          <tr>
            <td>Considera los resultados de la evaluaci&oacute;n (asesor&iacute;as, trabajos complementarios, b&uacute;squeda de informaci&oacute;n, etc.) para realizar mejoras en el aprendizaje.</td>
            <td colspan="10"><input type="range" class="form-range" min="20" max="100" step="20" id="vol4" name="vol4"></td>
          </tr>
          <tr>
            <td>Da a conocer las calificaciones en el plazo establecido.</td>
            <td colspan="10"><input type="range" class="form-range" min="20" max="100" step="20" id="vol5" name="vol5"></td>
          </tr>
          <tr>
            <td>Da oportunidad de mejorar los resultados de la evaluaci&oacute;n del aprendizaje.</td>
            <td colspan="10"><input type="range" class="form-range" min="20" max="100" step="20" id="vol6" name="vol6"></td>
          </tr>
          <tr>
            <td>Muestra apertura para la correcci&oacute;n de errores de apreciaci&oacute;n y evaluaci&oacute;n.</td>
            <td colspan="10"><input type="range" class="form-range" min="20" max="100" step="20" id="vol7" name="vol7"></td>
          </tr>
          <tr>
            <td>Otorga calificaciones imparciales.</td>
            <td colspan="10"><input type="range" class="form-range" min="20" max="100" step="20" id="vol8" name="vol8"></td>
          </tr>
        </tbody>
      </table>

      <div class="d-grid gap-2 d-md-flex justify-content-end">
        <a href="Motivación.php?id_maestro=<?= $id_maestro?>">
          <button class="btn btn-primary btn-sm" type="button">Anterior</button>
        </a>
        <a href="Comunicacion.php?id_maestro=<?= $id_maestro?>">
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