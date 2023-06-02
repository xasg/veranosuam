<?php

require('../controller/conect.php');
sleep(1);
if (isset($_POST['id_espacio']) && isset($_POST['accion'])) {
    $accion = $_POST['accion'];
    $id_espacio = $_POST['id_espacio'];    
    if ($accion === 'Eliminar') {
        # code...
        $query="DELETE FROM espacio_disponible WHERE id_espacio = '{$id_espacio}'";
        $result = $mysqli->query($query);
        if ($result) {
            # code...
            header("Location: organizaciones.php?eliminado='Vacante Eliminada'");
        }else {
            # code...
            header("Location: organizaciones.php?noeliminado='Error Al eliminar'");
        }

    }elseif($accion ==='actualizar') {
        # code...
    
    $id_organizacion_act = $_POST['idorg'];    
    $licenciatura_inserta = $_POST['lic_act'];  
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
    $area = $_POST['area_act'];    
    $actividad_inserta = $_POST['actividad_act'];   
    $modalidad = $_POST['modalidad_act'];   
    $modalidad_trabajo_inserta = $_POST['modalidad_trabajo_act'];   
    $apoyo_inserta = $_POST['apoyo_act'];   
    $lugares_inserta = $_POST['lugares_act'];   
    $requisitos_inserta = $_POST['requisitos_act'];   
    date_default_timezone_set('America/Mexico_City');
    $tiempo = date('d-m-Y H:i:s');     
    $query = "UPDATE espacio_disponible SET licenciatura='{$licenciatura_inserta}',id_dt_carrera='{$id_dt_carrera_inserta}',area_proyecto='{$area}',actividad='{$actividad_inserta}',modalidad_part='{$modalidad}',modalidad_trabajo='{$modalidad_trabajo_inserta}',apoyo='{$apoyo_inserta}',lugares='{$lugares_inserta}',requisitos='{$requisitos_inserta}',dt_create='{$tiempo}'  where id_espacio='{$id_espacio}'  ";
    $result = $mysqli->query($query);
 
    if ($result) {
        // echo '<sub class="form-text text-danger"><strong>Oh no!</strong> Este Email ya se encuentra registrado.</sub>';
        header("Location: organizaciones.php?exitoso=$nombre");
    } else {
        header("Location: organizaciones.php?noexitoso=$nombre");
        // echo '<div class="text-success"><strong>Enhorabuena!</strong> Usuario disponible.</div>';
    }
    }
}



// SELECT * FROM organizacion LEFT JOIN espacio_disponible on organizacion.id_org = espacio_disponible.id_organizacion where id_org =12
?>