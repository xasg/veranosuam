<?php
	// require('../controller/conect.php');
	require('../model/estudiantes.php');
    
    if (isset($_POST['matricula'])) {
        # code...
    $nombres = strtoupper( $_POST['nombres']);
    $a_paterno = strtoupper( $_POST['a_paterno']);
    $a_materno = strtoupper( $_POST['a_materno']);
    $matricula = $_POST['matricula'];
    $licenciatura = $_POST['licenciatura'];
    $creditos = $_POST['creditos'];
    $edad = $_POST['edad'];
    $telefono = $_POST['telefono'];
    $sexo = $_POST['sexo'];
    $correo = strtoupper( $_POST['correo']);
    // $timestamp = time();
    date_default_timezone_set('America/Mexico_City');
$tiempo = date('d-m-Y H:i:s');    
    insertar_estudiante($nombres,$a_paterno,$a_materno,$matricula,$licenciatura,$creditos,$edad,$sexo,$correo,$telefono,$tiempo);
        header("Location: ../view/inscribete.php?matricula=$matricula");
    }else{
        echo 'no';
    }

?>