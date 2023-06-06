<?php
       require("../controller/conect.php");
       if (isset($_POST['user_id'])) {
            
        $actualiza_id = $_POST['user_id'];
        $nombres_act =  strtoupper($_POST['nombres']);
        $a_paterno_act = strtoupper($_POST['a_paterno']);
        $a_materno_act = strtoupper($_POST['a_materno']);
        $matricula_act = $_POST['matricula'];
        $lic_act = $_POST['licenciatura'];
        $creditos_act = $_POST['creditos'];
        $edad_act = $_POST['edad'];
        $sexo_act = $_POST['sexo'];
        $correo_act = strtoupper($_POST['correo']);
        $telefono_act = $_POST['telefono'];
        date_default_timezone_set('America/Mexico_City');
        $tiempo = date('d-m-Y H:i:s'); 
                                                
        $sql = "UPDATE estudiantes SET nombres='{$nombres_act}',a_paterno='{$a_paterno_act}',a_materno='{$a_materno_act}',matricula='{$matricula_act}',licenciatura='{$lic_act}',creditos ='{$creditos_act}',sexo ='{$sexo_act}',correo='{$correo_act}',telefono='{$telefono_act}',cretate='{$tiempo}' WHERE id='{$actualiza_id}'";
        if ($mysqli->query($sql)) {
        # code...
        header("Location: estudiantes.php?actualizado=$matricula_act");
            
         }
        }
?>