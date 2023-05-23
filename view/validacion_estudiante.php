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
    $result = $mysqli->query(
        'SELECT * FROM estudiantes WHERE matricula = "'.($matricula).'"'
    );
    foreach($result as $datos){
        $nombre = $datos['nombres'];
        $apellidop = $datos['a_paterno'];
        $apellidom = $datos['a_materno'];
        $matricula_registrada = $datos['matricula'];
    }

    $matriculaValida = $matricula;
    if ($result->num_rows > 0) {
        
        // echo ;
        echo "<div class='alert alert-success'><strong>Enhorabuena {$nombre} {$apellidop} {$matricula_registrada}!</strong> Matricula Registrada continua llenando tus documentos .</div>";
        echo "";
        ?>
<form id="step-form" action="../includes/crear_documentos_estudiante.php" method="post">
                           <!-- <div class="step active" id="step-1">
                              <h2 class="text-center ">Paso 1 Datos personales</h2>
                              <p>Procura tener todos los documentos en mano, para agilizar el proceso</p>
                              <input type="text" class="form-control" name="matricula_estudiante" id="matricula_estudiante" placeholder="<?php echo $matricula_registrada; ?>" value="<?php echo $matricula_registrada; ?>"  required disabled>
                           </div> -->
                           <div class="step mb-3 active" id="step-1">
                                <label for="matricula_registrada" class="form-label">Matricula Registrada</label>
                                <!-- <input type="text" class="form-control" name="formato_postulacion" id="formato_postulacion" placeholder="<?php echo $matricula_registrada; ?>" value="<?php echo $matricula_registrada; ?>"  required> -->
                                <input type="text" class="form-control" name="matricula_estudiante" id="matricula_estudiante" placeholder="<?php echo $matricula_registrada; ?>" value="<?php echo $matricula_registrada; ?>"  required>                                
                                <div class="mb-3">
                                <label for="campo1" class="form-label">INE</label>
                                <input type="file" class="form-control" name="ine" id="ine" placeholder="" aria-describedby="fileHelpId" required>
                                <div id="fileHelpId" class="form-text">en formato pdf</div>
                              </div>
                              <div class="mb-3">
                                <label for="campo1" class="form-label">Comprobante de Domicilio</label>
                                <input type="file" class="form-control" name="comprobante_domicilio" id="comprobante_domicilio" placeholder="" aria-describedby="fileHelpId" required>
                                <div id="fileHelpId" class="form-text">en formato pdf</div>
                              </div>
                              <div class="mb-3">
                                <label for="campo1" class="form-label">CURP</label>
                                <input type="file" class="form-control" name="curp" id="curp" placeholder="" aria-describedby="fileHelpId" required>
                                <div id="fileHelpId" class="form-text">en formato pdf</div>
                              </div>
                              <!-- <div class="mb-3">
                                <label for="campo1" class="form-label">Curriculum Vitae</label>
                                <input type="file" class="form-control" name="cv" id="cv" placeholder="" aria-describedby="fileHelpId" required>
                                <div id="fileHelpId" class="form-text">en formato pdf</div>
                              </div> -->
                            </div>
                           <div class="step" id="step-2">
                              <h2>Paso 2 Datos de postulación</h2>
                              <div class="mb-3">
                                <label for="campo1" class="form-label">Curriculum Vitae</label>
                                <input type="file" class="form-control" name="cv" id="cv" placeholder="" aria-describedby="fileHelpId" required>
                                <div id="fileHelpId" class="form-text">en formato pdf</div>
                              </div>
                              <div class="mb-3">
                                <label for="campo1" class="form-label">Carta Compromiso</label>
                                <input type="file" class="form-control" name="carta_compromiso" id="carta_compromiso" placeholder="" aria-describedby="fileHelpId" required>
                                <div id="fileHelpId" class="form-text">en formato pdf</div>
                              </div>
                              <div class="mb-3">
                                <label for="campo1" class="form-label">Comprobante de seguro facultativo</label>
                                <input type="file" class="form-control" name="carta_compromiso" id="carta_compromiso" placeholder="" aria-describedby="fileHelpId" required>
                                <div id="fileHelpId" class="form-text">en formato pdf</div>
                              </div>
                             
                           </div>

                           <div class="step" id="step-3">
                              <h2>Paso 3 Datos documentación bancaria</h2>
                              <div class="mb-3">
                                <label for="campo1" class="form-label">Formato de pago por transferencia</label>
                                <input type="file" class="form-control" name="formato_pago" id="formato_pago" placeholder="" aria-describedby="fileHelpId" required>
                                <div id="fileHelpId" class="form-text">en formato pdf</div>
                              </div>
                              <div class="mb-3">
                                <label for="campo1" class="form-label">Estado de cuenta Bancario</label>
                                <input type="file" class="form-control" name="cuenta_bancaria" id="cuenta_bancaria" placeholder="" aria-describedby="fileHelpId" required>
                                <div id="fileHelpId" class="form-text">en formato pdf</div>
                              </div>
                           </div>

                           <div class="button-container">
                              <button type="button" class="solid__btn" onclick="previousStep()">Anterior</button>
                              <button type="button"  class="solid__btn" onclick="nextStep()">Siguiente</button>
                              <!-- <button type="submit" class="solid__btn" onclick="submitForm()">Enviar</button> -->
                              <button type="submit" class="solid__btn">Enviar</button>
                              
                           </div>
                        </form>

<?php
        
    } else {
        echo '<div class=" alert alert-danger"><strong>Oh no!</strong> la matricula no se encuentra registrada.</div>';
    }
}
?>
<script>
    let currentStep = 0;
    const progressBar = document.getElementById('progress');
    const form = document.getElementById('step-form');
    const steps = Array.from(form.getElementsByClassName('step'));

    function nextStep() {
      if (validateFields()) {
        if (currentStep < steps.length - 1) {
          steps[currentStep].classList.remove('active');
          currentStep++;
          steps[currentStep].classList.add('active');
          updateProgress();
        }
      }
    }

    function previousStep() {
      if (currentStep > 0) {
        steps[currentStep].classList.remove('active');
        currentStep--;
        steps[currentStep].classList.add('active');
        updateProgress();
      }
    }

    function updateProgress() {
      const progress = (currentStep / (steps.length - 1)) * 100;
      progressBar.style.width = progress + '%';
    }

    function validateFields() {
      const currentField = steps[currentStep].querySelector('input[required]');
      if (currentField && !currentField.value.trim()) {
        alert('Por favor, complete el campo antes de continuar.');
        return false;
      }
      return true;
    }

    function submitForm() {
      // Realizar acciones adicionales aquí, como enviar datos al servidor
      if (validateFields().alert() != 'Por favor, complete el campo antes de continuar.' ) {
        alert('Formulario enviado correctamente');
        resetForm();
      }else{
        alert('Completa Todos los Pasos antes de continuar')
      }
    }

    function resetForm() {
      currentStep = 0;
      steps.forEach((step) => {
        step.classList.remove('active');
      });
      steps[currentStep].classList.add('active');
      updateProgress();
      form.reset();
    }

    // Mostrar el primer paso al cargar la página
    updateProgress();
    steps[currentStep].classList.add('active');
  </script>