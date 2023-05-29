<?php
	// require('../controller/conect.php');
	require('../model/responsables.php');
    
    if (isset($_POST['correo'])) {
        # code...
    $nombres = strtoupper( $_POST['nombres']);
    $correo = strtoupper( $_POST['correo']);
    $pass = strtoupper( $_POST['password']);
    // $matricula = $_POST['matricula'];
    // $licenciatura = $_POST['licenciatura'];
    // $creditos = $_POST['creditos'];
    // $edad = $_POST['edad'];
    // $telefono = $_POST['telefono'];
    // $sexo = $_POST['sexo'];
    // $correo = strtoupper( $_POST['correo']);
    // $timestamp = time();
    date_default_timezone_set('America/Mexico_City');
$tiempo = date('d-m-Y H:i:s');    
$tp_user = 1;
    // mysqli_set_charset( $mysqli, 'utf8');	
    // global $mysqli;
    // $queryM  = "INSERT INTO estudiantes(id,nombres,a_paterno,a_materno,matricula,licenciatura,creditos,edad,sexo,correo,telefono,cretate)  VALUES (null, '{$nombres}','{$a_paterno}','{$a_materno}','{$matricula}','{$licenciatura}','{$creditos}','{$edad}','{$sexo}','{$correo}','{$telefono}', CURRENT_TIMESTAMP() ";
    // $resultadoM = $mysqli->query($queryM);
    // $mysqli->query("INSERT INTO estudiantes(id,nombres,a_paterno,a_materno,matricula,licenciatura,creditos,edad,sexo,correo,telefono)  VALUES (null, '{$nombres}','{$a_paterno}','{$a_materno}','{$matricula}','{$licenciatura}','{$creditos}','{$edad}','{$sexo}','{$correo}','{$telefono}' ");
    insertar_responsable($correo,$nombres,$pass,$tp_user,$tiempo);
    // $mysqli->query($sql);
        // echo 'si'.$matricula;
        

        header("Location: ../administrador/index.php?usuarionuevo=$correo");
    }else{
        header("Location: ../view/inscribete.php?correo=no se registro");
        // echo 'no se realizo el registro';
    }

?>