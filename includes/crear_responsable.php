<?php
	// require('../controller/conect.php');
	require('../model/responsables.php');
    
    if (isset($_POST['correo'])) {
        # code...
    $nombres = strtoupper( $_POST['nombres']);
    $correo = strtoupper( $_POST['correo']);
    $pass = strtoupper( $_POST['password']);
    date_default_timezone_set('America/Mexico_City');
$tiempo = date('d-m-Y H:i:s');    
$tp_user = 1;
    insertar_responsable($correo,$nombres,$pass,$tp_user,$tiempo);
        header("Location: ../administrador/index.php?usuarionuevo=$correo");
    }else{
        header("Location: ../view/inscribete.php?correo='no se registro");
    }

?>