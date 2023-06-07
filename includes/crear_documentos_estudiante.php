<?php
require('../controller/conect.php');

if ($_POST) {
        // header("../index.php");
        $matricula_estudiante = $_POST["matricula_estudiante"];
                        


        
        $ine = $matricula_estudiante.'_'. $_FILES['ine']["name"];
        $ine_tmp = $_FILES['ine']["tmp_name"];

        $comprobante_domicilio = $matricula_estudiante.'_'. $_FILES['comprobante_domicilio']["name"];
        $comprobante_domicilio_tmp = $_FILES['comprobante_domicilio']["tmp_name"];
        
        $curp = $matricula_estudiante.'_'. $_FILES['curp']["name"];
        $curp_tmp = $_FILES['curp']["tmp_name"];

        $seguro = $matricula_estudiante.'_'. $_FILES['seguro']["name"];
        $seguro_tmp = $_FILES['seguro']["tmp_name"];

        $cv = $matricula_estudiante.'_'. $_FILES['cv']["name"];
        $cv_tmp = $_FILES['cv']["tmp_name"];
        
        $constancia = $matricula_estudiante.'_'. $_FILES['constancia']["name"];
        $constancia_tmp = $_FILES['constancia']["tmp_name"];
        
        $carta_compromiso = $matricula_estudiante.'_'. $_FILES['carta_compromiso']["name"];
        $carta_compromiso_tmp = $_FILES['carta_compromiso']["tmp_name"];
        
        $formato_pago = $matricula_estudiante.'_'. $_FILES['formato_pago']["name"];
        $formato_pago_tmp = $_FILES['formato_pago']["tmp_name"];

        $cuenta_bancaria = $matricula_estudiante.'_'. $_FILES['cuenta_bancaria']["name"];
        $cuenta_bancaria_tmp = $_FILES['cuenta_bancaria']["tmp_name"];

        $formato_postulacion = $matricula_estudiante.'_'. $_FILES['formato_postulacion']["name"];
        $formato_postulacion_tmp = $_FILES['formato_postulacion']["tmp_name"];
            
            $carpeta_documentos = "files/";
            $archivo = $carpeta_documentos . basename($ine);
            $archivo2 = $carpeta_documentos . basename($curp);
            // echo $archivo;

            $tipo_de_archivo = strtolower(pathinfo($archivo,PATHINFO_EXTENSION));
            // echo $tipo_de_archivo; 




            if ($tipo_de_archivo == "jpg" || $tipo_de_archivo ="jpeg" ) {
                    if (move_uploaded_file($ine_tmp , $carpeta_documentos . $ine) && move_uploaded_file($comprobante_domicilio_tmp , $carpeta_documentos . $comprobante_domicilio) && move_uploaded_file($curp_tmp , $carpeta_documentos . $curp) && move_uploaded_file($cv_tmp , $carpeta_documentos . $cv) && move_uploaded_file($seguro_tmp , $carpeta_documentos . $seguro) && move_uploaded_file($constancia_tmp , $carpeta_documentos . $constancia) && move_uploaded_file($carta_compromiso_tmp , $carpeta_documentos . $carta_compromiso) && move_uploaded_file($formato_pago_tmp , $carpeta_documentos . $formato_pago) && move_uploaded_file($cuenta_bancaria_tmp , $carpeta_documentos . $cuenta_bancaria) && move_uploaded_file($formato_postulacion_tmp , $carpeta_documentos . $formato_postulacion)) {
                        # code...
                        

                        // echo "El archivo se agrego correctamente";
                        global $mysqli;
                        $sql =  "INSERT INTO  documentos_estudiante(matricula,ine,curp,comprobante_domicilio,seguro,cv,constancia_creditos,carta_compromiso,formato_pago,cuenta_bancaria,formato_postulacion)  values( '{$matricula_estudiante}','{$ine}','{$curp}','{$comprobante_domicilio}','{$seguro}','{$cv}','{$constancia}','{$carta_compromiso}','{$formato_pago}','{$cuenta_bancaria}','{$formato_postulacion}')";
                        $query = "UPDATE estudiantes SET estatus = 1 where matricula = '{$matricula_estudiante}'";                        
                        
                        if ($mysqli->query($sql) && $mysqli->query($query)) {
                            # code...
                            header("Location: ../index.php?envio=$matricula_estudiante");
                        }

                    }else{
                        echo "HUBO UN ERROR";

                    }
            }else {
                # code...
                echo '<script> alert("El archivo tiene que ser pdf"); </script>';
            }
        // }
    }
?>