<!doctype html>
<?php session_start();?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist&display=swap" rel="stylesheet">

    <title>Puntos de evaluaci&oacute;n</title>
	
	<style>
	
	body {
    font-family: 'Urbanist', sans-serif;
    }
	
	.fondo_texto{
	background: #003366;
	}
	
	.texto {
	color:#FFFFFF;
	}

  .borde-puntos-evaluacion{
    border-radius: 12px 12px 12px 12px;
    overflow: hidden;
  }
	
	</style>
	<?php
  if(!isset($_GET['id_maestro']) || !isset($_SESSION['usuario'])){
    header('location: main.php');
  }
  $id_maestro = $_GET["id_maestro"];
  $urlVar = "?id_maestro=$id_maestro";
  ?>
  </head>
  <body>
	<div class="fondo_texto text-center container-fluid mb-5 p-4">
	<div class="texto"><h5>PUNTOS DE EVALUACI&Oacute;N</h5></div>
	</div>
	
	
	<div class="container-md">
	<div class="row">
    <div class="col">
    <div class="card text-center h-100 shadow borde-puntos-evaluacion ">
      <img src="imagenes/iconos/Dominio_asignatura.jpg" class="card-img-top mt-3">
      <div class="card-body">
        <h5 class="card-title mt-3"><a href="puntos_evaluacion/Dominio_asignatura.php<?= $urlVar?>" class="link-primary">Dominio de la asignatura</a></h5>
        </div>
    </div>
  </div>
	     <div class="col">
    <div class="card text-center h-100 shadow borde-puntos-evaluacion">
      <img src="imagenes/iconos/Planificacion_curso.png" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title m-2"><a href="puntos_evaluacion/Planificacion_curso.php<?= $urlVar?>" class="link-primary">Planificaci&oacute;n del curso</a></h5>
        </div>
     </div>
    </div>
	
  <div class="col">
    <div class="card text-center h-100 shadow borde-puntos-evaluacion">
      <img src="imagenes/iconos/ambientes_aprendizaje.png" class="card-img-top mt-2">
      <div class="card-body">
        <h5 class="card-title "><a href="puntos_evaluacion/Ambientes_aprendizaje.php<?= $urlVar?>" class="link-primary">Ambientes de aprendizaje</a></h5>
	  </div>
    </div>
   </div>
	
    <div class="col">
    <div class="card text-center h-100 shadow borde-puntos-evaluacion">
      <img src="imagenes/iconos/Estrategias_metodos_tecnicas.jpg" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title"><a href="puntos_evaluacion/Estrategias_métodos_técnicas.php<?= $urlVar?>" class="link-primary">Estrategias, m&eacute;todos y t&eacute;cnicas</a></h5>
	  </div>
     </div>
    </div>
   </div>
  </div>
  
	     <p>&nbsp;</p>
		 <div class="container-md">
	     <div class="row">
		 <div class="col">
    <div class="card text-center h-100 shadow borde-puntos-evaluacion">
      <img src="imagenes/iconos/motivación.jpg" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title mt-5"><a href="puntos_evaluacion/Motivación.php<?= $urlVar?>" class="link-primary">Motivaci&oacute;n</a></h5>
	   </div>
      </div>
     </div>
	
	<div class="col">
    <div class="card text-center h-100 shadow borde-puntos-evaluacion">
      <img src="imagenes/iconos/evaluación.jpg" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title"><a href="puntos_evaluacion/Evaluacion.php<?= $urlVar?>" class="link-primary">Evaluaci&oacute;n</a></h5>
	   </div>
      </div>
     </div>
	
    <div class="col">
    <div class="card text-center h-100 shadow borde-puntos-evaluacion">
      <img src="imagenes/iconos/Comunicación.png" class="card-img-top mt-3">
      <div class="card-body">
        <h5 class="card-title mt-5"><a href="puntos_evaluacion/Comunicacion.php<?= $urlVar?>" class="link-primary">Comunicaci&oacute;n</a></h5>
	  </div>
     </div>
    </div>
  
	     <div class="col">
    <div class="card text-center h-100 shadow borde-puntos-evaluacion">
      <img src="imagenes/iconos/Gestion_curso.png" class="card-img-top mt-5">
      <div class="card-body">
        <h5 class="card-title mt-2"><a href="puntos_evaluacion/Gestion_curso.php<?= $urlVar?>" class="link-primary">Gesti&oacute;n del curso</a></h5>
	   </div>
      </div>
     </div>
    </div>
   </div>
	
	<p>&nbsp;</p>
	<div class="container">
	<div class="row row-cols-1 row-cols-md-4">
    <div class="col">
    <div class="card text-center h-100 shadow borde-puntos-evaluacion">
      <img src="imagenes/iconos/tecnologias_informacion.png" class="card-img-top mt-4">
      <div class="card-body">
        <h5 class="card-title mt-2"><a href="puntos_evaluacion/Tecnologias_informacion_comunicacion.php<?= $urlVar?>" class="link-primary">Tecnolog&iacute;as de la informaci&oacute;n y comunicaci&oacute;n</a></h5>
	  </div>
     </div>
    </div> 
 
	<div class="col">
    <div class="card text-center h-100 shadow borde-puntos-evaluacion">
      <img src="imagenes/iconos/Satisfacción_general.png" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title"><a href="puntos_evaluacion/Satisfaccion_general.php<?= $urlVar?>" class="link-primary">Satisfacci&oacute;n general</a></h5>
	  </div>
     </div>
    </div>
   </div>
  </div>

  <p>&nbsp;</p>
  
	
	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>