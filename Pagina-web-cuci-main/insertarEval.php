<?php 
session_start();
include('conectar.php');
$divisor = 0;
$columna = $_POST["categoria"];
$id_maestro = $_POST["id_maestro"];

if(isset($_POST["vol1"])){
    $campo1 = $_POST["vol1"];
    $divisor ++;
} else {
    $campo1 = 0;
}

if(isset($_POST["vol2"])){
    $campo2 = $_POST["vol2"];
    $divisor ++;
} else {
    $campo2 = 0;
}

if(isset($_POST["vol3"])){
    $campo3 = $_POST["vol3"];
    $divisor ++;
} else {
    $campo3 = 0;
}

if(isset($_POST["vol4"])){
    $campo4 = $_POST["vol4"];
    $divisor ++;
} else {
    $campo4 = 0;
}

if(isset($_POST["vol5"])){
    $campo5 = $_POST["vol5"];
    $divisor ++;
} else {
    $campo5 = 0;
}

if(isset($_POST["vol6"])){
    $campo6 = $_POST["vol6"];
    $divisor ++;
} else {
    $campo6 = 0;
}

if(isset($_POST["vol7"])){
    $campo7 = $_POST["vol7"];
    $divisor ++;
} else {
    $campo7 = 0;
}

if(isset($_POST["vol8"])){
    $campo8 = $_POST["vol8"];
    $divisor ++;
} else {
    $campo8 = 0;
}

$suma = $campo1 + $campo2 + $campo3 + $campo4 + $campo5 + $campo6 + $campo7 + $campo8;
$resultado = $suma/$divisor;
//La variable $resultado es el 1er promedio de 3 que se obtiene para la calificación del maestro.
//Es el promedio de todos los puntos de una categoría.

//-------------------------------------------------------------------
echo $resultado;
echo " / ".$columna;
//-------------------------------------------------------------------
$id_alumno = $_SESSION['id'];

//Consulta si existe un registro de calificación para el maestro asignado y el alumno que califica-|
$consulta = "SELECT *
FROM evaluacion
WHERE (evaluacion.id_maestro = $id_maestro)
AND (evaluacion.alumno = $id_alumno)";

$ejecutar_consulta = $conexion->query($consulta);
$num_registros = $ejecutar_consulta->num_rows;
//--------------------------------------------------------------------------------------------------|

//En caso de haber una coincidencia, actualizar los valores del registro. --------------------|
//de lo contrario, crear un nuevo registro con los datos.
switch($num_registros){
    case 0:

        $insertaActualiza = "INSERT INTO evaluacion (id_maestro, $columna, alumno)
        VALUES ('$id_maestro', '$resultado', '$id_alumno')";
        echo " / insert";
        break;

    case 1:

        $insertaActualiza = "UPDATE evaluacion SET $columna = '$resultado'
        WHERE (evaluacion.id_maestro = $id_maestro)
        AND (evaluacion.alumno = $id_alumno)";
        echo "  / actualiza";
        break;
        
}

$ejecutar_accion = $conexion->query($insertaActualiza);
//----------------------------------------------------------------------------------------------|
//Consulta todas la calificaciones realizadas por los alumnos al maestro actual
$consulta = "SELECT *
FROM evaluacion
WHERE (evaluacion.id_maestro = $id_maestro)";

$ejecutar_consulta = $conexion->query($consulta);
$promedio_general = 0;
$promedio_per_alumno = 0;
$contAlumnos = 0;
while($registro = $ejecutar_consulta->fetch_assoc()){
    $dom = $registro['dominio'];
    $plan = $registro['planificacion'];
    $amb = $registro['ambientes'];
    $est = $registro['estrategias'];
    $mot = $registro['motivacion'];
    $eva = $registro['evaluacion'];
    $com = $registro['comunicacion'];
    $ges = $registro['gestion'];
    $tec = $registro['tecnologias'];
    $gen = $registro['general'];

    //Saca el promedio del maestro por alumno
    $suma = $dom + $plan + $amb + $est + $mot + $eva + $com + $ges + $tec + $gen;
    echo nl2br("-suma: $suma \n");
    $promedio_per_alumno = $suma / 10;
    echo nl2br("-promedio por alumno: $promedio_per_alumno \n");
    $promedio_general += $promedio_per_alumno;
    echo nl2br("-promedio general: $promedio_general \n");

    $contAlumnos ++;
    echo nl2br("-contador alumnos: $contAlumnos \n");

    /*$promedio_per_alumno: es el promedio que se saca sumando todos los promedios de las categorías que realizó un alumno al maestro,
                            (es el 2do promedio de 3 que se obtiene para la calificación del maestro)*/

    //$promedio_general: es la suma de todos los promedios por alumno

    /*$promedio_final: es el promedio de la suma de las calificaciones por alumno entre el número de alumnos calificadores,
                       (es el 3er promedio y último que se obtiene para la calificación del maestro)*/
}

$promedio_final = $promedio_general / $contAlumnos;
echo nl2br("-promedio final: $promedio_final \n");

$insertarCalif = "UPDATE maestros
SET calificacion = '$promedio_final'
WHERE (maestros.id_maestros = $id_maestro)";

$conexion->query($insertarCalif);
$conexion->close();

header('location:' .$_SERVER['HTTP_REFERER']);
?>