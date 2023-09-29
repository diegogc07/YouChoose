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
    <link href="https://fonts.googleapis.com/css2?family=Glory&display=swap" rel="stylesheet">

    <title>Recuperaci&oacute;n</title>
	
	<style>

	 body{
    font-family: 'Glory', sans-serif;
	  background: #1D976C;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #93F9B9, #1D976C);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #93F9B9, #1D976C); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	  }
	
	.recuperar {
	  background-color:#FFFFFF;
    border-radius: 12px 12px 0 0;
	}
	
  .volver{
    background: #f2f2f2;
    border-radius: 0 0 12px 12px;
  }

	</style>

  </head>
  <body>
    
	<div class="recuperar container w-50 mt-5 shadow">
	<h2 class="text-center py-4">Recuperación de contraseña</h2>
	<div class="text-center mb-4">
  <img src="imagenes/iconos/Recuperacion.png" width="260" height="200" class="rounded" alt="recuperacion">
</div>


<p class="text-center">Indroduce el correo vinculado con la cuenta.</p>

<form id="form1" name="form1" method="post" action="recoverPass.php">
<div class="mb-4">
   <div align="center">
     <input class="p-1" type="email" name="email" placeholder="Correo electrónico" size="45" />
   </div>
</div>

     <div align="center" class="d-grid col-5 mx-auto">
    <button class="btn btn-primary" type="submit">Enviar</button>
   <p>&nbsp;</p>
  </div>
 </form>

  </div>

   <div class="volver container w-50 shadow p-1">
      <p class="text-center mt-2"><a href="Login.php" class="link-primary">Volver a iniciar sesión</a></p>
 </div>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	  
	  
  </body>
</html>
