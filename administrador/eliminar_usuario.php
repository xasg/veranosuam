<?php
require("../controller/conect.php");
if (isset($_POST['id_eliminar'])) {

       $id = $_POST['id_eliminar'];
       $query="DELETE FROM usuarios WHERE id = '{$id}'";
       $resp = $mysqli->query($query);
       if ($resp) {
          # code...
          header("Location: usuarios.php?usuario_eliminado");
       }

    
 }
 
?>