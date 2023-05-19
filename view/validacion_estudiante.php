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
require('../controller/conec.php');
sleep(1);
if (isset($_POST)) {
    $matricula = (string)$_POST['matricula'];    
    $result = $mysqli->query(
        'SELECT * FROM estudiantes WHERE matricula = "'.strtolower($matricula).'"'
    );
    foreach($result as $datos){
        $nombre = $datos['nombres'];
        $apellidop = $datos['a_paterno'];
        $apellidom = $datos['a_materno'];
    }

    $matriculaValida = $matricula;
    if ($result->num_rows > 0) {
        
        // echo ;
        echo "<div class='alert alert-success'><strong>Enhorabuena {$nombre} {$apellidop}!</strong> Matricula Registrada continua llenando tus documentos .</div>";
        echo "";
        // echo " <input  placeholder='{$matriculaValida}' value='{$matriculaValida}'   id='matriculavalida1' name='matriculavalida1' hidden>";
        // echo " <input type='number' class='form-control'  id='matriculaValida1' name='matriculaValida1' value='$matriculaValida' >";

        ?>
 <form id="step-form">
                           <div class="step active" id="step-1">
                              <h2 class="text-center ">Paso 1</h2>
                              <label for="campo1">Identificacion Oficial:</label>
                              <input type="text" name="identificacion" id="identificacion" required>
                           </div>

                           <div class="step" id="step-2">
                              <h2>Paso 2</h2>
                              <label for="campo2">Campo 2:</label>
                              <input type="text" name="campo2" id="campo2" required>
                           </div>

                           <div class="step" id="step-3">
                              <h2>Paso 3</h2>
                              <label for="campo3">Campo 3:</label>
                              <input type="text" name="campo3" id="campo3" required>
                           </div>

                           <div class="button-container">
                              <button type="button" class="solid__btn" onclick="previousStep()">Anterior</button>
                              <button type="button"  class="solid__btn" onclick="nextStep()">Siguiente</button>
                              <button type="submit" class="solid__btn" onclick="submitForm()">Enviar</button>
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