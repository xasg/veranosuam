<?php
       require("../controller/conect.php");
    //    if (isset($_POST['matricula_id']) && isset($_POST['accion'])) {
        if ($_POST) {
            # code...
        
      # code...
        $accion = $_POST['accion'];
        $matricula_id = $_POST['matricula_id'];
        $matricula_eliminar = $_POST['matricula'];
        $nombres_act = $_POST['nombres'];
        $a_paterno_act = $_POST['a_paterno'];
        $a_materno_act = $_POST['a_materno'];
        $matricula_act = $_POST['matricula'];
        if ($accion === 'actualizar') {
                                                # code...
                                                
        $sql = "UPDATE `estudiantes` SET `nombres`='{$nombres_act}',`a_paterno`='{$a_paterno_act}',`a_materno`='{$a_materno_act}',`matricula`='{$matricula_act}' WHERE id='{$matricula_id}'";
        if ($mysqli->query($sql)) {
        # code...
        header("Location: estudiantes.php?actualizado=$matricula_act");
            }
         }
        }
?>