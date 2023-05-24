<head>
<style>
    #progress-bar {
      width: 100%;
      height: 20px;
      background-color: #f0f0f0;
      border-radius: 4px;
      margin-bottom: 10px;
    }

    #progress {
      height: 100%;
      /* background-color: #42b983; */
      /* background-color: #ff8e31e0; */
      background: linear-gradient(#ff8e31e0,#ea6900e0,#9f5111ec);
      width: 0%;
      border-radius: 4px;
      transition: width 0.3s ease;
    }

    .step {
      display: none;
    }

    .step.active {
      display: block;
    }

    .step h2 {
      margin-top: 0;
    }

    .button-container {
      margin-top: 20px;
    }

    .button-container button {
      display: inline-block;
      padding: 10px 20px;
      /* background-color: #d76b1d; */
      /* color: #fff; */
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .button-container button:first-child {
      /* background-color: #ddd; */
      /* color: #000; */
    }
  </style>

</head>
<?php 
require('../controller/conect.php');
sleep(1);
if (isset($_POST)) {
    $matricula = $_POST['matricula'];    
    $result = $mysqli->query("SELECT * FROM estudiantes WHERE matricula = {$matricula} ");
    foreach($result as $datos){
        $nombre = $datos['nombres'];
        $apellidop = $datos['a_paterno'];
        $apellidom = $datos['a_materno'];
        $matricula_registrada = $datos['matricula'];
    }
    $siexite ='';
    $matriculaValida = $matricula;
    if ($result->num_rows > 0) {
      $result2 = $mysqli->query("SELECT * FROM documentos_estudiante WHERE matricula = {$matricula} ");
      foreach ($result2 as $matriculado) {
        # code...
        $siexite =  $matriculado['matricula'];
      }
      if ($siexite) {
        # code...
        echo "<div class='alert alert-success'><strong> {$nombre} {$apellidop} {$matricula_registrada}!</strong> ya has llenado tus documentos espera a que nos comuniquemos contigo! .</div>";
        echo "";
      }else{
        // echo ;
        echo "<div class='alert alert-success'><strong>Enhorabuena {$nombre} {$apellidop} {$matricula_registrada}!</strong> Matricula Registrada continua llenando tus documentos .</div>";
        echo "";
        ?>
 <form  action="../includes/crear_documentos_estudiante.php" method="post" enctype="multipart/form-data">
                           <!-- <div class="step active" id="step-3"> -->
                              <h2 class="text-center">Formato de Postulación</h2>
                              <!-- <label for="">Identificacion Oficial:</label> -->
                              <p>Procura tener todos los documentos en mano, para agilizar el proceso</p>
                     
                              <div class="mb-3 " id="step-1">
                                <input type="text" class="form-control" name="matricula_estudiante" id="matricula_estudiante" placeholder="<?php echo $matricula_registrada; ?>" value="<?php echo $matricula_registrada; ?>"  required hidden="true">
                              
                                <label for="ine" class="form-label">INE</label>
                                <input type="file" class="form-control" name="ine" id="ine" required>
                                <div id="fileHelpId" class="form-text">en formato pdf</div>
                              
                                <label for="campo1" class="form-label">Comprobante de Domicilio</label>
                                <input type="file" class="form-control" name="comprobante_domicilio" id="comprobante_domicilio" placeholder="" aria-describedby="fileHelpId" required>
                                <div id="fileHelpId" class="form-text">en formato pdf</div>

                                <label for="campo1" class="form-label">CURP</label>
                                <input type="file" class="form-control" name="curp" id="curp" placeholder="" aria-describedby="fileHelpId" required>
                                <div id="fileHelpId" class="form-text">en formato pdf</div>

                                <label for="campo1" class="form-label">Comprobante de Seguro Facultativo</label>
                                <input type="file" class="form-control" name="seguro" id="seguro" placeholder="" aria-describedby="fileHelpId" required>
                                <div id="fileHelpId" class="form-text">en formato pdf</div>

                                <label for="campo1" class="form-label">Curriculum Vitae</label>
                                <input type="file" class="form-control" name="cv" id="cv" placeholder="" aria-describedby="fileHelpId" required>
                                <div id="fileHelpId" class="form-text">en formato pdf</div>
                                
                                <label for="campo1" class="form-label">Constancia de créditos y promedio</label>
                                <input type="file" class="form-control" name="constancia" id="constancia" placeholder="" aria-describedby="fileHelpId" required>
                                <div id="fileHelpId" class="form-text">en formato pdf</div>

                                <label for="campo1" class="form-label">Carta Compromiso</label>
                                <input type="file" class="form-control" name="carta_compromiso" id="carta_compromiso" placeholder="" aria-describedby="fileHelpId" required>
                                <div id="fileHelpId" class="form-text">en formato pdf</div>

                                <label for="campo1" class="form-label">Formato de pago por transferencia</label>
                                <input type="file" class="form-control" name="formato_pago" id="formato_pago" placeholder="" aria-describedby="fileHelpId" required>
                                <div id="fileHelpId" class="form-text">en formato pdf</div>
                                
                                <label for="campo1" class="form-label">Estado de cuenta Bancario</label>
                                <input type="file" class="form-control" name="cuenta_bancaria" id="cuenta_bancaria" placeholder="" aria-describedby="fileHelpId" required>
                                <div id="fileHelpId" class="form-text">en formato pdf</div>

                              <label for="formato_postulacion" class="form-label">Formato de postulacion</label>
                                <input type="file" class="form-control" name="formato_postulacion" id="formato_postulacion"   required>
                                <div id="fileHelpId" class="form-text">Help text</div>                                
                              </div>
                           </div>

                           <div class="button-container">
                              <button type="submit" class="solid__btn" >Enviar</button>
                           </div>
                        </form>

<?php
      }
    } else {
        echo '<div class=" alert alert-danger"><strong>Oh no!</strong> aun no se encuentran documentos registrados registrada.</div>';
    }
}
?>
