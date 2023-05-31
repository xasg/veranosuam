<?php

require('../controller/conect.php');
sleep(1);
if (isset($_POST)) {
    $nombre = $_POST['nombre_empresa'];    
    $direccion = $_POST['direccion'];    
    $estatus = $_POST['estatus'];   
    date_default_timezone_set('America/Mexico_City');
    $tiempo = date('d-m-Y H:i:s');     
    $result = $mysqli->query(
        'INSERT INTO organizacion(nombre,direccion,dt_create,estatus) values("'.$nombre.'","'.$direccion.'","'.$tiempo.'","'.$estatus.'")'
    );
 
    if ($result) {
        // echo '<sub class="form-text text-danger"><strong>Oh no!</strong> Este Email ya se encuentra registrado.</sub>';
        header("Location: index.php?exitoso=$nombre");
    } else {
        header("Location: organizaciones.php?noexitoso=$nombre");
        // echo '<div class="text-success"><strong>Enhorabuena!</strong> Usuario disponible.</div>';
    }
}

SELECT * FROM organizacion LEFT JOIN espacio_disponible on organizacion.id_org = espacio_disponible.id_organizacion where id_org =12
?>