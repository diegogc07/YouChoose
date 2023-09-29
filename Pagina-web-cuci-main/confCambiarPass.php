<?php
//Hace el cambio de la contraseña
include("conectar.php");

$password = $_POST['newPassword'];
$email = $_POST['email'];

$password = md5($password);

$consulta = "SELECT * FROM alumnos WHERE correo LIKE '$email'";
$ejecutar_consulta = $conexion->query($consulta);
$num_registros = $ejecutar_consulta->num_rows;

$modificar = "UPDATE alumnos SET password='$password' WHERE correo LIKE '$email'";
$ejecutar_update = $conexion->query($modificar);
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YouChoose</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Glory&display=swap" rel="stylesheet">


    <style>

body{
		font-family: 'Glory', sans-serif;
		background: #1D976C;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #93F9B9, #1D976C);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #93F9B9, #1D976C); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	}

  .cont {
    background-color: #FFF;
		border-radius: 12px 12px 12px 12px;
  }

    </style>

  </head>
  <body>
    <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p>
    <div class="cont container-fluid w-25 text-center shadow">
    <h4>Tu contraseña se cambiado correctamente!</h4>
    <img src='imagenes/iconos/Cambio_cotraseña.png' height='285'>
    <p class="mt-1">Puedes cerrar la pestaña sin ningún problema.</p>
    <br>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>