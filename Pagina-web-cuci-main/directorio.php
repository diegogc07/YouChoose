<!doctype html>
<?php session_start();?>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Glory&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Urbanist&display=swap" rel="stylesheet">

  <title>Directorio</title>
  <style type="text/css">

    body {
      font-family: 'Glory', sans-serif;
    }

    .fondo {
      background-image: url('imagenes/Fondo_directorio.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      height: 100vh;
    }

    .inicio {
      color: #FF0000;

    }

    .Tabla1 {
      background: #003366;
    }

    .Tabla2 {
      background: #003366;
    }

    .texto1 {
      color: #FFFFFF;
    }

    .texto2 {
      color: #FFFFFF;
    }

    .fondo_inferior {
      background: #FFFFFF;
    }

    .fondo_inferior2 {
      background: #FFFFFF;
    }

    .btn{
      background: #4b65d1;
      border-radius: 0;
      color: #FFFFFF;
      border-radius: 7px 7px 7px 7px;
    }

    .btn:hover{
      box-shadow: 0px 0px 9px rgba(0, 0, 0, .35);
    }

    .texto{
      font-family: 'Urbanist', sans-serif;
    }

  </style>

</head>

<body>

  <div class="fondo">
    <div class="container-fluid w-25">
      <form id="form1" name="form1" method="post" action="Busqueda_maestro.php">
        <h2 align="center" class="p-2">Búsqueda por</h2>
        <table class="table table-bordered border border-2 border-dark text-center mt-4">
          <thead>
            <tr class="Tabla1">
              <th width="200" scope="col">
                <h4 align="center" class="texto1">Maestro(a)</h4>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr class="fondo_inferior">
              <td height="67">Nombre:
                <label>
                  <input class="rounded" type="text" name="Nom_maestro" id="Nom_maestro2" placeholder="Palabra clave" title="Escribe un nombre completo o palabra clave" />
                </label>
                </span>
                <p align="center" class="texto mt-4">
                  <button class="btn" type="submit" name="Submit" value="Buscar" onClick="">Buscar</button>
                </p>
              </td>
            </tr>
          </tbody>
        </table>
      </form>



      <form id="form2" name="form2" method="post" action="Busqueda_materia.php">
        <table class="table table-bordered border border-2 border-dark text-center mt-4">
          <thead>
            <tr class="Tabla2">
              <th width="200" scope="col">
                <h4 align="center" class="texto2">Materia</h4>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr class="fondo_inferior2">
              <td height="67">Nombre:
                <label>
                  <input class="rounded" type="text" name="Nom_materia" id="Nom_materia" placeholder="Palabra clave" title="Ingresa el nombre de una materia  o una palabra clave" />
                </label>
                </span>
                <p align="center" class="texto mt-4 Estilo1"><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('ayuda1','','imagenes/iconos/ayuda2.png',1)">
                    <button class="btn" type="submit" name="Submit2" value="Buscar" onClick="">Buscar</button>
                  </a></p>
              </td>
            </tr>
          </tbody>
        </table>
      </form>
      <?php if(!isset($_SESSION['usuario'])):?>
      <div align="center">
        <span class="inicio">
          <strong>Debes iniciar sesión para búscar en el directorio</strong>
        </span>
      </div>
      <?php endif; ?>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>