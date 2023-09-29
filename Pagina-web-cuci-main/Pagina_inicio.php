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

  <title>Pagina Principal</title>

  <style>
    body {
      font-family: 'Glory', sans-serif;
    }

    header {
      width: 100%;
      height: 650px;
      background: #11998e;
      /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, hsla(143, 85%, 58%, 0.503), hsla(175, 80%, 33%, 0.503)), url(imagenes/escritorio.jpg);
      /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, hsla(143, 85%, 58%, 0.503), hsla(175, 80%, 33%, 0.503)), url(imagenes/escritorio.jpg);
      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

      background-size: cover;
      background-attachment: fixed;
      position: relative;
    }

    .wave {
      position: absolute;
      bottom: 0;
      width: 100%;
    }

    header .textos-header {
      display: flex;
      height: 430px;
      width: 100%;
      align-items: center;
      justify-content: center;
      text-align: center;
      flex-direction: column;
    }

    .textos-header h1 {
      font-size: 50px;
      color: #ffffff;
    }

    .textos-header h2 {
      font-size: 25px;
      font-weight: 300;
      color: #ffffff;
    }

    .text_funcionamiento {
      display: flex;
      justify-content: space-evenly;

    }

    .margen_texto {
      margin-top: 50px;
    }

    .imagen_funcion {
      width: 55%;
      position: relative;
      right: 150px;
    }

    .contenedor {
      width: 90%;
      max-width: 1000px;
      margin: auto;
    }

    .servicios_fondo {
      background: #f2f2f2;
    }

    .footer {
      background: #1D976C;
      /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #93F9B9, #1D976C);
      /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, #93F9B9, #1D976C);
      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      padding-bottom: 0.1px;
    }

    .borde {
      width: 90%;
      max-width: 165px;
      margin: 0 auto;
      height: 2px;
      background: #200122;
      margin-bottom: 15px;
    }

    .color_email {
      color: #ffffff;
    }

    .email {
      color: #ffffff;
    }

    .line {
      width: 90%;
      max-width: 1400px;
      margin: 0 auto;
      height: 2px;
      background: #200122;
      margin-bottom: 40px;
    }

    .imagen_footer {
      width: 160px;
      margin-top: 43px;
      left: 100px;
      position: absolute;
    }

    .funcionamiento {
      color: #52c234;
    }

    .servicios {
      color: #52c234;
    }
  </style>


</head>

<body>

  <!-- ==================== -->
  <!---- IMAGEN DE PRESENTACIÓN---->
  <!-- ==================== -->

  <header>
    <section class="textos-header">
      <h1>Bienvenido a YouChoose</h1>
      <h2>La mejor opción para los estudiantes</h2>
    </section>
    <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
        <path d="M0.00,49.99 C150.00,150.00 349.20,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #ffffff;"></path>
      </svg></div>
  </header>


  <!-- ==================== -->
  <!---- FUNCIONAMIENTO ---->
  <!-- ==================== -->

  <section class="contenedor">
    <h3 align="center" class="funcionamiento mt-4 mb-5">Funcionamiento</h3>
    <div class="text_funcionamiento">
      <img src="imagenes/iconos/Funcionamiento.png" alt="" class="imagen_funcion">
      <h5 align="justify" class="margen_texto"><span class="text-primary">YouChoose</span> fue creada para dar a los
        estudiantes de la Ciénega, una herramienta con la cual se familiaricen y apoyen, ya que les brindará
        informaci&oacute;n básica y útil de docentes, esto con el fin de que puedan tener la opci&oacute;n de evaluarlos
        y poder poner su comentario personal de como a sido su experiencia con cada uno de ellos, esto servirá, para que
        generaciones actuales y futuras se puedan apoyar con la informaci&oacute;n recabada.</h5>
    </div>
  </section>


  <!-- ==================== -->
  <!---- SERVICIOS... ---->
  <!-- ==================== -->

  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>

  <section class="servicios_fondo">
    <selection class="container-fluid">
      <h3 align="center" class="servicios mt-3 mb-4">Servicios</h3>
      <div class="row w-75 mx-auto">
        <div class="col-lg-6 col-md-6 col-sm-12 my-5">
          <img src="imagenes/iconos/Directorio1.png" class="mx-auto d-block img-fluid" alt="directorio" width="350" height="160">
          <div>
            <h5 class="fs-5 mt-4 px-4 pb-1 text-center">Directorio</h5>
            <p align="justify" class="px-4">Contará con búsquedas por medio del nombre, apellido del maestro, materia o letra seleccionada, una vez ingresado, se mostrará la informaci&oacute;n.</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 my-5">
          <img src="imagenes/iconos/Registro1.png" class="mx-auto d-block img-fluid" alt="registro" width="339" height="200">
          <div>
            <h5 class="fs-5 mt-5 px-4 pb-1 text-center">Registro</h5>
            <p align="justify" class="px-4">La forma de poder registrarse en la plataforma será por medio de su código, correo institucional, carrera y un nombre(Nickname) el cual podrá ser elegido por el alumno.</p>
          </div>
        </div>
      </div>
  </section>
  <div class="row w-75 mx-auto">
    <div class="col-lg-6 col-md-6 col-sm-12 my-5">
      <img src="imagenes/iconos/Puntos_evaluación.png" class="mx-auto d-block img-fluid mt-4" alt="puntos evaluacion" width="250" height="350">
      <div>
        <h5 class="fs-5 mt-4 px-4 pb-1 text-center">Puntos de evaluaci&oacute;n</h5>
        <p align="justify" class=" px-4">En este apartado, se tendrá la opción de evaluar a uno o múltiples docentes si as&iacute; se desea, esto se realizará por una serie de puntos que estarán divididos en distintas secciones, las cuales abarcarán un punto específico de evaluaci&oacute;n, si optas por realizar la evaluaci&oacute;n recuerda que se deberá contestar con total honestidad ya que la informaci&oacute;n obtenida será registrada para uso de otros alumnos.</p>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 my-5">
      <img src="imagenes/iconos/Docentes.png" class="mx-auto d-block img-fluid mt-4" alt="docentes" width="366" height="350">
      <div>
        <h5 class="fs-5 mt-5 px-4 pb-1 text-center">Docentes</h5>
        <p align="justify" class="px-4">Se brindará informaci&oacute;n básica y una fotografía para que en caso de que no se conozca al docente se pueda identificar, se contará con un apartado extra el cual mostrará, las materias impartidas y por último se tendrá la opción de la evaluaci&oacute;n.</p>
      </div>
    </div>
  </div>
  <section class="servicios_fondo">
    <div class="row w-75 mx-auto">
      <div class="col-lg-6 col-md-6 col-sm-12 my-5">
        <img src="imagenes/iconos/Comentarios1.png" class="mx-auto d-block img-fluid" alt="comentarios" width="374" height="160">
        <div>
          <h5 class="fs-5 mt-4 px-4 pb-1 text-center">Comentarios</h5>
          <p align="justify" class="px-4">Los alumnos podrán realizar comentarios, con la finalidad de tener una visión amplia sobre cada docente.</p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 my-5">
        <img src="imagenes/iconos/perfil-usuarios.png" class="mx-auto d-block img-fluid" alt="usuarios" width="390" height="160">
        <div>
          <h5 class="fs-5 mt-2 px-4 pb-1 text-center">Perfil usuario</h5>
          <p align="justify" class="px-4">Cada estudiante podrá ver su información, se tendrá la opción de agregar una foto de perfil y contará con un apartado para editar.</p>
        </div>
      </div>
    </div>
  </section>
  </selection>



  <footer class="footer">
    <img src="imagenes/logo.png" alt="" class="mt-5 imagen_footer">
    <p>&nbsp;</p>
    <h5 align="center" class="color_email">Contáctanos vía Email</h5>
    <div class="borde"></div>
    <h5 align="center" class="email ">youchuus@gmail.com</h5>
    <p>&nbsp;</p>
    <div class="line"></div>
  </footer>





  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <script>
        var frames = window.parent.frames;
        frames[0].location.reload();
      </script>
</body>

</html>