<?php
require("../controller/conect.php");
if (isset($_POST['organizacion_id_eliminar'])) {

       $id = $_POST['organizacion_id_eliminar'];
       $query="DELETE FROM organizacion WHERE id_org = '{$id}'";
       $resp = $mysqli->query($query);
       if ($resp) {
          # code...
          header("Location: organizaciones.php?eliminada_organizacion");
       }

    
 }
 
?>