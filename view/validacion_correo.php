<?php 
require('../controller/conec.php');
sleep(1);
if (isset($_POST)) {
    $username = (string)$_POST['correo'];    
    $result = $mysqli->query(
        'SELECT * FROM estudiantes WHERE correo = "'.strtolower($username).'"'
    );
 
    if ($result->num_rows > 0) {
        echo '<sub class="form-text text-danger"><strong>Oh no!</strong> Este Email ya se encuentra registrado.</sub>';
    } else {
        echo '<div class="text-success"><strong>Enhorabuena!</strong> Usuario disponible.</div>';
    }
}
?>

<!-- <p class="">
    Help Text
</p> -->