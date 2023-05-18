<?php
require_once('../controller/conect.php');
// require_once('./controller/conec.php');

// require_once('./controller/conec.php');


function insertar_estudiante($nombres,$a_paterno,$a_materno,$matricula,$licenciatura,$creditos,$edad,$sexo,$correo,$telefono,$tiempo){
    global $mysqli;
    $licenciaturas = $mysqli->real_escape_string($licenciatura); 
    $queryM  = "INSERT INTO estudiantes(id,nombres,a_paterno,a_materno,matricula,licenciatura,creditos,edad,sexo,correo,telefono,cretate)  VALUES (null, '{$nombres}','{$a_paterno}','{$a_materno}','{$matricula}','{$licenciaturas}','{$creditos}','{$edad}','{$sexo}','{$correo}','{$telefono}','{$tiempo}')";
     $mysqli->query($queryM);
}


//   mysqli_set_charset( $mysqli, 'utf8');	
//     global $mysqli;



?>