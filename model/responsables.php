<?php
require_once('../controller/conect.php');


function insertar_responsable($correo,$nombres,$pass,$tp_user,$tiempo){
    global $mysqli;
    // $licenciaturas = $mysqli->real_escape_string($licenciatura); 
    $queryM  = "INSERT INTO usuarios(correo,name,password,tp_user,date_create)  VALUES ( '{$correo}','{$nombres}','{$pass}','{$tp_user}','{$tiempo}')";
     $mysqli->query($queryM);
}




?>