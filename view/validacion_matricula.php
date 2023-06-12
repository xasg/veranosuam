<?php 
require('../controller/conect.php');
sleep(1);
if (isset($_POST)) {
    $matricula = (string)$_POST['matricula'];    
    $result = $mysqli->query(
        'SELECT * FROM estudiantes WHERE matricula = "'.strtolower($matricula).'"'
    );
 
    if ($result->num_rows > 0) {
        echo '<sub class="form-text text-danger"><strong>Oh no!</strong> La matricula ya se encuentra registrada.</sub>';
    } else {
        echo '<div class="text-success"><strong>Enhorabuena!</strong> Matricula disponible.</div>';
    }
}
?>