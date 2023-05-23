<?php
require_once('../controller/conect.php');


function insertar_estudiante($nombres,$a_paterno,$a_materno,$matricula,$licenciatura,$creditos,$edad,$sexo,$correo,$telefono,$tiempo){
    global $mysqli;
    $licenciaturas = $mysqli->real_escape_string($licenciatura); 
    $queryM  = "INSERT INTO estudiantes(nombres,a_paterno,a_materno,matricula,licenciatura,creditos,edad,sexo,correo,telefono,cretate)  VALUES ( '{$nombres}','{$a_paterno}','{$a_materno}','{$matricula}','{$licenciaturas}','{$creditos}','{$edad}','{$sexo}','{$correo}','{$telefono}','{$tiempo}')";
     $mysqli->query($queryM);
}
function insertar_documentos_estudiante($matricula){
    global $mysqli;
    // $licenciaturas = $mysqli->real_escape_string($licenciatura); 
    $queryM  = "INSERT INTO estudiantes(nombres,a_paterno,a_materno,matricula,licenciatura,creditos,edad,sexo,correo,telefono,cretate)  VALUES ( '{$nombres}','{$a_paterno}','{$a_materno}','{$matricula}','{$licenciaturas}','{$creditos}','{$edad}','{$sexo}','{$correo}','{$telefono}','{$tiempo}')";
     $mysqli->query($queryM);
}



?>