
<?php 
require('../controller/conect.php');
if (isset($_POST)) {
    # code...
    global $mysqli;
$id = $_POST['idorg'];
$nombre = $_POST['nombre'];
$estatus = $_POST['estatus'];
$direccion = $_POST['direccion'];
date_default_timezone_set('America/Mexico_City');
$tiempo = date('d-m-Y H:i:s');    
$query = "UPDATE organizacion SET nombre='{$nombre}',direccion='{$direccion}',dt_create='{$tiempo}',estatus='{$estatus}'  where id_org='{$id}'  ";
$result = $mysqli->query($query);

if ($result) {
// insertar_estudiante($nombres,$a_paterno,$a_materno,$matricula,$licenciatura,$creditos,$edad,$sexo,$correo,$telefono,$tiempo);
    header("Location: organizaciones.php?exitoso=$nombre");
}else {
    # code...
    header("Location: index.php?noexitoso=$nombre");
}
}else{
    header("Location: index.php?noexitoso=$nombre");
    // echo 'no';
}


?>