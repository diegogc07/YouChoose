<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php session_start();?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Glory&display=swap" rel="stylesheet">

	<title>Documento sin t&iacute;tulo</title>

	<style>
		body {
			background: #f2f2f2;
		}

		.fondo_tabla {
			background-color: #FFFFFF;
		}

		.nom {
			background: #003366;
			color: #FFF;
		}

		.cla {
			background: #003366;
			color: #FFF;
		}

		.no-coincidencias{
		border-radius: 12px 12px 12px 12px;
		position: absolute;
		background: #fff;
		bottom: 160px;
		left: 585px;
	}

	</style>


</head>

<body>
	<?php
	if(!isset($_SESSION['usuario'])){
		header('location: '.$_SERVER['HTTP_REFERER']);
	}
	$nombreMateria = $_POST["Nom_materia"];
	//Conexi�n a la base de datos
	include("conectar.php");
	
	$consulta = "select * from materias where nombre like '%$nombreMateria%'";

	echo "<table border='1' class='container-fluid w-75 fondo_tabla table-bordered border-dark mt-3'>
	 <tr>
     <th class='nom text-center'>Nombre</th>
	 <th width='200' class='cla text-center'>Clave</th>
     </tr>";

	$ejecutar_consulta = $conexion->query($consulta);
	$num_registros = $ejecutar_consulta->num_rows;
	while ($registro = $ejecutar_consulta->fetch_assoc()) {
		$nombre = $registro['nombre'];
		$clave = $registro['clave_materias'];

		echo "
    <tr>
    <td><a href='Informacion_materias.php?materia=$nombre&clave=$clave'>$nombre<a/></td>
    <td class='text-center'>$clave</td>
    </tr>";
	}
	if ($num_registros == 0) {
		echo "<div class='container-fluid w-25 shadow text-center no-coincidencias'>
		<h4>No se encontraron coincidencias</h4> 
		<img src='imagenes/iconos/Busqueda.png' width='320' height='300' alt='' class=''> 
		<br><a href='directorio.php'>Volver a buscar</a> </div>";
	}
	$conexion->close();
	?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>