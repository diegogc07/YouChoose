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

    <title>Barra de navegaci&oacute;n</title>
	
	<style>
	
	 body{
	  font-family: 'Glory', sans-serif;
	  }
	  
	  .fondo {
      background: #fff;
	  }

    .nav-link{
      color: #0f9b0f;
    }
	
	</style>
	
	
  </head>
  <body>
  <?php 
    if(isset($_SESSION['usuario'])){
      
      $navItemLog = '';
      $navItemSign = '<li class="nav-item">
      <a href="Perfil.php" target="mainFrame" class=" nav-link">Mi perfil</a></li>
      <li class="nav-item">
      <a href="Logout.php" target="mainFrame" class=" nav-link">Cerrar sesión</a></li>';
    } else {
      $navItemLog = '<li class="nav-item">
      <a href="Login.php" target="mainFrame" class=" nav-link">Iniciar sesión</a></li>
    <li class="nav-item">
      <a href="regist.php" target="mainFrame" class=" nav-link">Registro</a></li>';
      $navItemSign = '';
    }
    ?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="fondo container-fluid">  
    <a class="navbar-brand">
	<img src="imagenes/logo.png" alt="Logo" width="75" height="50" class="d-inline-block align-text-top"></a>
	 <div> 
      <ul class="nav justify-content-end nav-pills">
        <li class="nav-item">
          <a href="Pagina_inicio.php" target="mainFrame" class=" nav-link">Inicio</a></li>
        <li class="nav-item">
          <a href="directorio.php" target="mainFrame" class=" nav-link">Directorio</a></li>
        <?=$navItemLog?>
        <?=$navItemSign?>
      </ul>
	</div>
  </div>
</nav>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>