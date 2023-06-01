<?php

require('../controller/conect.php');
sleep(1);
if (isset($_POST['idorg_nuevo'])) {
    $id_organizacion_inserta = $_POST['idorg_nuevo'];    
    $licenciatura_inserta = $_POST['lic'];  
    switch ($licenciatura_inserta) {
        case 'Administración':
            $id_dt_carrera_inserta = 1;
            break;
        case 'Biología Molecular':
            $id_dt_carrera_inserta = 2;
            break;
        case 'Ciencias de la Comunicación':
            $id_dt_carrera_inserta = 3;
            break;
        case 'Derecho':
            $id_dt_carrera_inserta = 4;
            break;
        case 'Diseño':
            $id_dt_carrera_inserta = 5;
            break;
        case 'Estudios Socioterritoriales':
            $id_dt_carrera_inserta = 8;
            break;
        case 'Humanidades':
            $id_dt_carrera_inserta = 9;
            break;
        case 'Ingeniería Biológica':
            $id_dt_carrera_inserta = 6;
            break;
        case 'Ingeniería en Computación':
            $id_dt_carrera_inserta = 7;
            break;
        case 'Maestría en Ciencias Sociales y Humanidades':
            $id_dt_carrera_inserta = 10;
            break;
        case 'Maestría en Diseño, Información y Comunicación':
            $id_dt_carrera_inserta = 11;
            break;
        case 'Matemáticas Aplicadas':
            $id_dt_carrera_inserta = 12;
            break;
        case 'Tecnologías y Sistemas de Información':
            $id_dt_carrera_inserta = 13;
            break;
        
        default:
            # code...
            break;
    }
    $area = $_POST['area'];    
    $actividad_inserta = $_POST['actividad'];   
    $modalidad = $_POST['modalidad'];   
    $modalidad_trabajo_inserta = $_POST['modalidad_trabajo'];   
    $apoyo_inserta = $_POST['apoyo'];   
    $lugares_inserta = $_POST['lugares'];   
    $requisitos_inserta = $_POST['requisitos'];   
    date_default_timezone_set('America/Mexico_City');
    $tiempo = date('d-m-Y H:i:s');     
    $result = $mysqli->query(
        'INSERT INTO espacio_disponible(id_organizacion,licenciatura,id_dt_carrera,area_proyecto,actividad,modalidad_part,modalidad_trabajo,apoyo,lugares,requisitos,dt_create) values("'.$id_organizacion_inserta.'","'.$licenciatura_inserta.'","'.$id_dt_carrera_inserta.'","'.$area.'","'.$actividad_inserta.'","'.$modalidad.'","'.$modalidad_trabajo_inserta.'","'.$apoyo_inserta.'","'.$lugares_inserta.'","'.$requisitos_inserta.'","'.$tiempo.'")'
    );
 
    if ($result) {
        // echo '<sub class="form-text text-danger"><strong>Oh no!</strong> Este Email ya se encuentra registrado.</sub>';
        header("Location: index.php?exitoso=$nombre");
    } else {
        header("Location: organizaciones.php?noexitoso=$nombre");
        // echo '<div class="text-success"><strong>Enhorabuena!</strong> Usuario disponible.</div>';
    }
}

// SELECT * FROM organizacion LEFT JOIN espacio_disponible on organizacion.id_org = espacio_disponible.id_organizacion where id_org =12
?>