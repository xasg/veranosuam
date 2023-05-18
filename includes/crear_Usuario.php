<?php
	// require('../controller/conect.php');
	require('../model/estudiantes.php');
    
    if (isset($_POST['matricula'])) {
        # code...
    $nombres = $_POST['nombres'];
    $a_paterno = $_POST['a_paterno'];
    $a_materno = $_POST['a_materno'];
    $matricula = $_POST['matricula'];
    $licenciatura = $_POST['licenciatura'];
    $creditos = $_POST['creditos'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $timestamp = time();
    date_default_timezone_set('America/Mexico_City');
$tiempo = date('d-m-Y H:i:s');    
    // mysqli_set_charset( $mysqli, 'utf8');	
    // global $mysqli;
    // $queryM  = "INSERT INTO estudiantes(id,nombres,a_paterno,a_materno,matricula,licenciatura,creditos,edad,sexo,correo,telefono,cretate)  VALUES (null, '{$nombres}','{$a_paterno}','{$a_materno}','{$matricula}','{$licenciatura}','{$creditos}','{$edad}','{$sexo}','{$correo}','{$telefono}', CURRENT_TIMESTAMP() ";
    // $resultadoM = $mysqli->query($queryM);
    // $mysqli->query("INSERT INTO estudiantes(id,nombres,a_paterno,a_materno,matricula,licenciatura,creditos,edad,sexo,correo,telefono)  VALUES (null, '{$nombres}','{$a_paterno}','{$a_materno}','{$matricula}','{$licenciatura}','{$creditos}','{$edad}','{$sexo}','{$correo}','{$telefono}' ");
    insertar_estudiante($nombres,$a_paterno,$a_materno,$matricula,$licenciatura,$creditos,$edad,$sexo,$correo,$telefono,$tiempo);
    // $mysqli->query($sql);
        // echo 'si'.$matricula;
        

        header("Location: ../view/inscribete.php?matricula=$matricula");
    }else{
        echo 'no';
    }

?>