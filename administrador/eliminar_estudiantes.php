<?php
       require("../controller/conect.php");
       if (isset($_POST['matricula']) && isset($_POST['accion'])) {
      # code...
        $accion = $_POST['accion'];
        $matricula_eliminar = $_POST['matricula'];
        if ($accion === 'eliminar') {
                                                # code...
                                                
        $sql = "DELETE FROM estudiantes where matricula = '{$matricula_eliminar}'";
        if ($mysqli->query($sql)) {
        # code...
        header("Location: estudiantes.php?eliminado=$matricula_eliminar");
            }
         }
        }
?>