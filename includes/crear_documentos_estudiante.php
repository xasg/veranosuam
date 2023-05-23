<?php
require_once('../controller/conect.php');
// $conexion = new PDO("localhost", "root", "", "veranos2023");
// $result ='';
// if( $mysqli->connect_errno )
// {
//   echo 'error en la conexion ';
//   exit;
// }

    // if (isset($_POST['matricula_estudiante'])) {
    if ($_POST) {
        # code...
        // $matricula_estudiante = isset($_POST["matricula_estudiante"])?$_POST["matricula_estudiante"]:"";
        $matricula_estudiante = $_POST["matricula_estudiante"];
        // $formato = $_POST['formato_pago'];
        // $cuenta = $_POST['cuenta_bancaria'];
        echo $matricula_estudiante;
        echo "<script>
            alert();
            alert('si a {$matricula_estudiante}');
            
            </script>";

            $carpeta_documentos = "files/";
    // $ine_documento = basename($_FILES['ine']['name'] );
    // $curp_documento = basename($_FILES['curp']['name'] );
    // $formato_documento_nombre = basename($_FILES["formato_pago"]["name"] );
    // $cuenta_documento = basename($_FILES['cuenta_bancaria']['name'] );
    // $comprobante_domicilio_documento = basename($_FILES['domicilio']['name'] );
    // $comprobante_domicilio_documento = isset($_POST['matricula_'] );
    // $extension = strtolower(pathinfo($ine_documento, PATHINFO_EXTENSION));

    $nombreArchivo = $_FILES['ine']['name'];
    $rutaTemporal = $_FILES['ine']['tmp_name'];
        
    $rutaDestino = 'files/' . uniqid() . '_' . $nombreArchivo;
    if (move_uploaded_file($rutaTemporal , $rutaDestino)) {
        # code...
        global $mysqli;
        $sql =  "INSERT INTO  documentos_estudiante( comprobante_domicilio,matricula) values( '{$nombreArchivo}','{$matricula_estudiante}')";
        // $sq->bindParam(":matricula_estudiante",$matricula_estudiante);
        // $sql->execute();
        $mysqli->query($sql);
        // $mysqli->
    // }


    }
        }





    // print_r($_POST['formato_postulacion']);
    // if ($_POST['formato_postulacion']) {
    //     # code...
    //     $matricula = $_POST['formato_postulacion'];
    //     echo $matricula;
    //     echo "<script>
    //         alert();
    //         alert('si a {$matricula}');
    //         </script>";
    // }
    

    // 
    // if (move_uploaded_file($_FILES['ine']['tmp_name'], $carpeta_documentos . $ine_documento)) {
    //     # code...
    //     include("../controller/conect.php");
    //     $sql = "INSERT INTO documentos_estudiante(id,ine,curp,comprobante_domicilio,matricula) values(null,$ine_documento,$)"
    // }
    // }
?>