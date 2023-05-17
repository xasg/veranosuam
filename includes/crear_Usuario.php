<?php
	require('../controller/conect.php');
    
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

    // mysqli_set_charset( $mysqli, 'utf8');	
    global $mysqli;
    $queryM  = "INSERT INTO estudiantes(id,nombres,a_paterno,a_materno,matricula,licenciatura,creditos,edad,sexo,correo,telefono,cretate)  VALUES (null, '{$nombres}','{$a_paterno}','{$a_materno}','{$matricula}','{$licenciatura}','{$creditos}','{$edad}','{$sexo}','{$correo}','{$telefono}', '{$timestamp}' ";
    // $resultadoM = $mysqli->query($queryM);
    $mysqli->query($queryM);
    // $mysqli->query($sql);
        // echo 'si'.$matricula;
        

        header("Location: ../view/inscribete.php?matricula=$timestamp");
    }else{
        echo 'no';
    }

?>