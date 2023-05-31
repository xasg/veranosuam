<?php
require_once('./controller/conect.php');


function view_carreras(){
    global $mysqli;
   $sql = "SELECT * FROM rel_grado_carrera";
    return $mysqli->query($sql);
    return $result->fetch_assoc();
}
function view_cat_carreras(){
    global $mysqli;
   $sql = "SELECT * FROM cat_carrera ";
    
    // return $mysqli->query($sql);
    return $mysqli->query($sql);
    return $result->fetch_assoc();
}


function view_orgs(){

    global $mysqli;
    $sql = "SELECT SUM(estatus) as suma FROM organizacion";
    // Ejecuta la consulta y obtén el resultado
    $result = $mysqli->query($sql);
    // Verifica si se obtuvo algún resultado
    if ($result->num_rows > 0) {
        // Obtiene la primera fila del resultado
        $row = $result->fetch_assoc();
        // Accede al valor de la suma
        $suma = $row["suma"];
        // Retorna la suma
        return $suma;
    } 
}


function view_lugares(){

    global $mysqli;
    $sql = "SELECT SUM(lugares) as suma FROM espacio_disponible";
    // Ejecuta la consulta y obtén el resultado
    $result = $mysqli->query($sql);
    // Verifica si se obtuvo algún resultado
    if ($result->num_rows > 0) {
        // Obtiene la primera fila del resultado
        $row = $result->fetch_assoc();
        // Accede al valor de la suma
        $suma = $row["suma"];
        // Retorna la suma
        return $suma;
    } 

}

function insertar_estudiante($nombres,$a_paterno,$a_materno,$matricula,$licenciatura,$creditos,$edad,$sexo,$correo,$telefono){
    global $mysqli;
    $mysqli->query("INSERT INTO estudiantes(id,nombres,a_paterno,a_materno,matricula,licenciatura,creditos,edad,sexo,correo,telefono)  VALUES (null, '{$nombres}','{$a_paterno}','{$a_materno}','{$matricula}','{$licenciatura}','{$creditos}','{$edad}','{$sexo}','{$correo}','{$telefono}' ");
}
function actualiza_org($nombre,$id){
    global $mysqli;
    $mysqli->query("UPDATE organizacion SET nombre = '{$nombre}' where id_org='{$id}'");
}




?>