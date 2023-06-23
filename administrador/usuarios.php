<?php
    // include_once("../templates/header.php");
    session_start();
    if (isset($_SESSION['correo']) == false) {
      echo "<script> window.location ='../index.php'; </script>";
    }
    $id = $_SESSION['id'];
    // $correo = $_SESSION['correo'];
    $nombre = $_SESSION['name'];
    // $usuario = $_SESSION['nombre'];
    // $_SESSION['id'];
 

?>

<!doctype html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title> Estancias Profesionales de Verano UAMC</title>
      
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png">

      <!-- CSS here -->
      <link rel="stylesheet" href="../assets/app/css/bootstrap.min.css">
      <link rel="stylesheet" href="../assets/app/css/meanmenu.min.css">
      <link rel="stylesheet" href="../assets/app/css/animate.css">
      <link rel="stylesheet" href="../assets/app/css/swiper-bundle.min.css">
      <link rel="stylesheet" href="../assets/app/css/slick.css">
      <link rel="stylesheet" href="../assets/app/css/backtotop.css">
      <link rel="stylesheet" href="../assets/app/css/magnific-popup.css">
      <link rel="stylesheet" href="../assets/app/css/fontawesome-pro.css">
      <link rel="stylesheet" href="../assets/app/css/spacing.css">
      <link rel="stylesheet" href="../assets/app/css/main.css">
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    
<script type="text/javascript">
$(document).ready(function() {  
    $('#correo').on('blur', function(){
        $('#result-username').html('<img src="../img/loader.gif" />').fadeOut(1000);

        var correo = $(this).val();       
        var dataString = 'correo='+correo;

        $.ajax({
            type: "POST",
            url: "validacion_correo_usuario.php",
            data: dataString,
            success: function(data) {
                $('#result-username').fadeIn(1000).html(data);
            }
        });
    });              
});    
$(document).ready(function() {  
    $('#matricula').on('blur', function(){
        $('#result-matricula').html('<img src="../img/loader.gif" />').fadeOut(1000);

        var matricula = $(this).val();       
        var dataString = 'matricula='+matricula;

        $.ajax({
            type: "POST",
            url: "validacion_matricula.php",
            data: dataString,
            success: function(data) {
                $('#result-matricula').fadeIn(1000).html(data);
            }
        });
    });              
});    
$(document).ready(function() {  
    $('#matriculaValida').on('blur', function(){
        $('#result-matricula-valida').html('<img src="../img/loader.gif" />').fadeOut(1000);

        var matriculaValida = $(this).val();       
        var dataString = 'matricula='+matriculaValida;

        $.ajax({
            type: "POST",
            url: "validacion_estudiante.php",
            data: dataString,
            success: function(data) {
                $('#result-matricula-valida').fadeIn(1000).html(data);
            }
        });
    });              
});    
  
$(document).ready(function() {  
    $('#matriculaValida_formato').on('blur', function(){
        $('#result-matricula-valida-formato').html('<img src="../img/loader.gif" />').fadeOut(1000);

        var matriculaValida = $(this).val();       
        var dataString = 'matricula='+matriculaValida;

        $.ajax({
            type: "POST",
            url: "validacion_estudiante_formato.php",
            data: dataString,
            success: function(data) {
                $('#result-matricula-valida-formato').fadeIn(1000).html(data);
            }
        });
    });              
});  
</script>
<style>
       .mi-clase-boton-confirmar {
  background-color: #007bff !important;
  border-radius: 10px !important;
  color: #FFFFFF !important;
  box-shadow: 1px 0px 8px #000 !important;
}
    </style>
   </head>
   <body>
   <?php
$usuario = $_SESSION['name'];
?>
<?php
if (isset($_REQUEST['eliminado'])) {//Esta Validación verifica que se haya eliminado una vacante correctamente
   # code...
   echo "<script>  Swal.fire({
      icon: 'success',
      title: 'Vacante eliminada correctamente',
      showConfirmButton: true,
      customClass: {
         confirmButton: 'mi-clase-boton-confirmar'
       },
      timer: 12500
  });
  </script>";
}
if (isset($_REQUEST['exitoso'])) {//Esta Validación verifica que se haya actualizaco una organización correctamente
   # code...
   echo "<script>  Swal.fire({
      icon: 'success',
      title: 'Organización actualizada correctamente',
      showConfirmButton: true,
      customClass: {
         confirmButton: 'mi-clase-boton-confirmar'
       },
      timer: 12500
  });
  </script>";
}

if (isset($_REQUEST['usuario_eliminado'])) { //Esta Validación verifica que se haya eliminado una organización correctamente
   # code...
   echo "<script>  Swal.fire({
      icon: 'success',
      title: 'Usuario eliminado correctamente',
      showConfirmButton: true,
      customClass: {
         confirmButton: 'mi-clase-boton-confirmar'
       },
      timer: 12500
  });
  </script>";
}
if (isset($_REQUEST['creada'])) {//Esta Validación verifica que se haya registrado una vacante correctamente
   # code...
   echo "<script>  Swal.fire({
      icon: 'success',
      title: 'Vacante registrada correctamente',
      showConfirmButton: true,
      customClass: {
         confirmButton: 'mi-clase-boton-confirmar'
       },
      timer: 12500
  });
  </script>";
}

?>

      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

      <!-- Offcanvas area start -->
      <div class="fix">
         <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
               <div class="offcanvas__content">
                  <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                     <div class="offcanvas__logo">
                        <a href="../#">
                        <img src="../assets/img/logo/logo.png" alt="logo not found">
                        </a>
                     </div>
                    
                     <div class="offcanvas__close">
                        <button>
                           <i class="fal fa-times"></i>
                        </button>
                     </div>
                  </div>
                  
                  <div class="mobile-menu fix mb-40"></div>
                  <div class="offcanvas__contact mt-30 mb-20">

                     <h4>Contacto</h4>
                     <ul>
                        <li class="d-flex align-items-center">
                           <div class="offcanvas__contact-icon mr-15">
                              <i class="fal fa-map-marker-alt"></i>
                           </div>
                           <div class="offcanvas__contact-text">
                              <a target="_blank" href="https://www.google.com/maps/place/Universidad+Aut%C3%B3noma+Metropolitana+Unidad+Cuajimalpa/@19.3520841,-99.2826256,15z/data=!4m6!3m5!1s0x85d2074a4aea180d:0x1151e61121fd01f3!8m2!3d19.3520841!4d-99.2826256!16s%2Fm%2F03qdkrv" >UAMC</a>
                           </div>
                        </li>
                        <li class="d-flex align-items-center">
                           <div class="offcanvas__contact-icon mr-15">
                              <i class="far fa-phone"></i>
                           </div>
                           <div class="offcanvas__contact-text">
                              <a href="tel:55 5814 6509"> 55 5814 6509</a>
                           </div>
                        </li>
                        <li class="d-flex align-items-center">
                           <div class="offcanvas__contact-icon mr-15">
                              <i class="fal fa-envelope"></i>
                           </div>
                           <div class="offcanvas__contact-text">
                              <a href="mailto:enlace.vinculacion@cua.uam.mx"><span >enlace.vinculacion@cua.uam.mx</span></a>
                           </div>
                        </li>
                     </ul>
                  </div>
                  
               </div>
            </div>
         </div>
      </div>
      <div class="offcanvas__overlay bg-ligth"></div>
      <div class="offcanvas__overlay-white"></div>
      <!-- Offcanvas area start -->
      
      <!-- Header area start -->
      <header>
         <div id="header-sticky" class="header__area-3 header__transparent">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xl-2 col-lg-2 col-6">
                     <div class="header__logo">
                        <a href="../#">
                           <img src="../assets/img/logo/logo.png" alt="logo not found">
                        </a>
                     </div>
                  </div>
                  <div class="col-xl-8 col-lg-8 d-none d-lg-block">
                     <div class="menu__main-wrapper-3 d-flex justify-content-end">
                        <div class="main-menu main-menu-3 d-none d-none d-lg-block">
                           <nav id="mobile-menu">
                              <ul>
                                 
                                 <li>
                                    <a href="logout.php">Cerrar Sesión</a>
                                 </li>
                                 <li>
                                    <h5>
                                       <i> <?php echo $usuario; ?></i>
                                    </h5>
                                 </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-2 col-lg-2 col-6">
                     <div class="header__right d-flex align-items-center justify-content-end">
                        <div class="header__btn d-none d-xl-block">
                           <a class="border__btn s-3" target="_blank" href="https://www.cua.uam.mx/conoce-la-uam-unidad-cuajimalpa/coordinaciones-administrativas/coordinacion-de-vinculacion/vinculacion-y-desarrollo-profesional/estancias-profesionales-de-verano/informacion-para-alumnos">Convocatoria</a>
                        </div>
                        <div class="header__toggle d-xl-none">
                           <a class="sidebar__active" href="javascript:void(0)">
                              <div class="bar-icon">
                                 <span></span>
                                 <span></span>
                                 <span></span>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- Header area end -->
      


      <!-- Boost area start -->
      <a name="participa"></a>
<br><br><br>
      <div class="boost__area ">
         <div class="container">
            <div class="row  wow fadeInUp" data-wow-delay=".3s">
               <div class="col-xl-12 col-lg-12 ">
                  <div class="boost__content-wrapper mb-60">
                     <div class="section__title-wrapper mb-40">
                        <span class="section__subtitle-2">
                           <span>ADMIN</span>ISTRA
                        </span>
                        <h2 class="section__title-2">
                           Organizaciones
                        </h2>
                     </div>

                     <div class="table-responsive-xxl">
                        <a name="" id="" class="solid__btn" href="index.php" role="button">Estudiantes</a>
                        <a name="" id="" class="solid__btn" href="organizaciones.php" role="button">Organizaciones</a>
                        <a name="" id="" class="solid__btn" href="#" style="background:none; color:#3887fe;" role="button">Usuarios</a>
                        

                        
                        <br><br>
                        <table class="table table-sm table-dark ">
                           <!-- Button trigger modal Agregar Organización -->
                           <button type="button" class="solid__btn" style="width:150px; font-size:14px; height: 55px; margin-bottom:20px;" data-bs-toggle="modal" data-bs-target="#modaliduser">
                             Agrega Usuario
                           </button>
                                       <!-- Modal Body -->
                        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                        <div class="modal fade" id="modaliduser" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalTitleId">Registro de usuario con rol de ADMIN</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                            <form  action="../includes/crear_responsable.php" method="post">   
                                            <div class="row justify-content-center align-items-center g-2">
                                                
                                            
                                                    <div class="col-md-12">
                                                        <label for="nombres" class="form-label">Nombre(s)</label>
                                                        <input type="text" class="form-control" id="nombres" name="nombres" value="" required>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <label for="correo" class="form-label">Correo</label>
                                                        <input type="email" class="form-control" id="correo" name="correo" value="" required>
                                                        <div id="result-username"></div> 
                                                      </div>
                                                    <div class="col-md-12">
                                                        <label for="password" class="form-label">Password</label>
                                                        <input type="password" class="form-control" id="password" name="password" value="" required>
                                                        <!-- <div id="result-username"></div>  -->
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Rol</label>
                                                        <select class="form-select form-select-md" name="tp_user_rol" id="tp_user_rol" required>
                                                            <option selected disabled>Seleccióna el rol</option>
                                                            <option value="2">Administrador</option>
                                                            <option value="1">Usuario</option>
                                                        </select>
                                                    </div>
                                                   <button type="submit" class="btn solid__btn" >Registrar usuario </button>
                                                </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar pestaña</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <!-- Optional: Place to the bottom of scripts -->
                        <script>
                            const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
                        
                        </script>
                           <br>
                           
                           
                           
                           <?php 
                              require("../controller/conect.php");

                              $query = "SELECT * FROM usuarios order by tp_user DESC";
                              // $query = "SELECT * FROM organizacion ORDER BY id_org";
                              $result = $mysqli->query($query);
                              // $row = mysqli_fetch_assoc($result);
                              
                                 # code...
                           ?>
                           <thead class="border-bottom">
                              <tr>

                                 <th scope="col">ID</th>
                                 <th scope="col">Nombre</th>
                                 <th scope="col">correo</th>
                                 <th scope="col">password</th>
                                 <th scope="col">rol</th>
                                 <th scope="col">acciones</th>
                              </tr>
                           </thead>
                           
                           <?php
                           $counter = 1;
                           foreach ($result as $rows) {
                           ?>
                           <tbody class="">
                              <tr class="table-secondary">
                              
                                 <!-- <td class="text-center" id="organizacion_id" name="organizacion_id"><?php echo $rows['id_org']; ?></td> ID de la ORG en el registro de la base-->
                                 <td class="text-center"><?php echo $counter++ ?></td>
                                 <td scope="row"><?php echo $rows['name'] ?> </td>
                                 <td scope="row"><?php echo $rows['correo'] ?> </td>
                                 <td scope="row"><?php echo $rows['password'] ?> </td>
                                 
                                 
                                 <td scope="row"><?php if ($rows['tp_user'] == 2) {
                                     # code...
                                     echo 'Administrador';}else{ echo 'usuario';}  ?> </td>
                                
                                 <td scope="row"> <!--  Modal trigger button  -->
                                 <!-- <button type="button" class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#modalId<?php echo $rows['id']; ?>">
                                   acciones
                                 </button> -->
                                    <?php
                                       if ($rows['tp_user'] == 1) {
                                          # code...

                                    ?>
                                       <form action="eliminar_usuario.php" method="post">
                                       <input type="text" id="id_eliminar" name="id_eliminar" value="<?php echo $rows['id'];?>" hidden="true">          
                                       <button type="submit" class="btn btn-danger btn-md" >
                                             Eliminar
                                          </button>
                                       </form>
                                    <?php
                                       }
                                    ?>
                                 
                                
                                 
                                 
                                 
                                  </td>
                                 <!-- <td></td>
                                 <td>R1C3</td> -->
                              </tr>
                
                           </tbody>

                           <?php
                           }
                           ?>

                        </table>
                        <!-- </form> -->
                        <br><br><br>
                     </div>
                     <div class="col-md-12 text-center">
<ul class="pagination pagination-lg pager" id="developer_page"></ul>
</div>
                     

                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 ">
                  <div class="boost__thumb-wrapper mb-60">
                     <div class="boost__thumb w-img p-relative">
                        <!-- <img src="../assets/img/boost/boost-01.png" alt="image not found"> -->
                        
                        <div class="boost__shape-1"></div>
                     </div>
                     <div class="boost__shape-2">
                        <svg id="Group_27289" data-name="Group 27289" xmlns="http://www.w3.org/2000/svg" width="25.594" height="19.655" viewBox="0 0 25.594 19.655">
                           <!-- <path id="Path_26014" data-name="Path 26014" d="M321.713,46.082l-25.594,3.962,0,.008.163,1.6a23.645,23.645,0,0,0,7.662,14.089Z" transform="translate(-296.119 -46.082)" fill="#f8d458"/> -->
                         </svg>                         
                     </div>
                     <div class="boost__shape-3"></div>
                     <div class="boost__shape-4">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="44.495" height="44.279" viewBox="0 0 44.495 44.279"> -->
                           <!-- <path id="Path_26017" data-name="Path 26017" d="M437.625,75.1a11.863,11.863,0,1,1-13.383,10.112l-10.288-1.433a22.245,22.245,0,1,0,25.1-18.964Z" transform="translate(-413.738 -64.809)" fill="#425fec"/> -->
                         </svg>
                     </div>
                     <div class="hero__btn-link wow fadeInUp" data-wow-delay=".8s">
                        <!-- <a class="solid__btn" href="#">Inscribete</a> -->
                        
                        
                        <br>
                        
                     </div>
                     
                     
                  </div>
               </div>
            </div>
            
            
            
          
                     </div>
                  </div>
            </div>
            </div>
         </div>
      </div>
      <!-- Boost area end -->


      <!-- Footer area start -->
      <footer>
         <section class="footer__border footer-bg grey__bg p-relative z-index-11 pt-120 pb-60">
            <div class="footer__shape">
               <img src="../assets/img/shape/footer-shape.png" alt="">
            </div>
            <div class="container">
               <div class="row">
                  
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                     <div class="footer__widget mb-55">
                        <div class="footer__logo mb-20">
                           <a href="index.html">
                              <img src="../assets/img/logo/logo.png" alt="logo not found">
                           </a>
                        </div>
                        <div class="footer__contact mb-30">
                           <span>Vasco de Quiroga 4871, Contadero, </span>
                           <span>Cuajimalpa de Morelos, 05348</span>
                           <span>Ciudad de México, CDMX</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <div class="footer__copyright grey-bg-2">
            <div class="container">
               <div class="copyright__inner-2">
                  <div class="copyright__text text-center">
                     <p>©2023 UAMC</p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer area end -->

      </main>
      <!-- Body main wrapper end -->

      <!-- Back to top start -->
      <div class="progress-wrap">
         <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
         </svg>
         
      </div>
      <!-- Back to top end -->

      <!-- JS here -->
      <script src="../assets/app/js/vendor/jquery-3.6.0.min.js"></script>
      <script src="../assets/app/js/vendor/waypoints.min.js"></script>
      <script src="../assets/app/js/bootstrap.min.js"></script>
      <script src="../assets/app/js/meanmenu.min.js"></script>
      <script src="../assets/app/js/swiper-bundle.min.js"></script>
      <script src="../assets/app/js/slick.min.js"></script>
      <script src="../assets/app/js/magnific-popup.min.js"></script>
      <script src="../assets/app/js/backtotop.js"></script>
      <script src="../assets/app/js/counterup.js"></script>
      <script src="../assets/app/js/wow.min.js"></script>
      <script src="../assets/app/js/imagesloaded.pkgd.min.js"></script>
      <script src="../assets/app/js/isotope.pkgd.min.js"></script>
      <script src="../assets/app/js/ajax-form.js"></script>
      <script src="../assets/app/js/main.js"></script>
      
      <script> 
    $(document).ready(function(){
           $("#cat_carrera").change(function () {         
             $("#cat_carrera option:selected").each(function () {
               id_grado= $(this).val();
               $.post("includes/carrerasObtener.php", { id_grado: id_grado }, function(data){
                 $("#catalogo").html(data);
               });            
             });
           })
         });
         $(document).ready(function(){
           $("#catalogo").change(function () {         
             $("#catalogo option:selected").each(function () {
               id_carrera= $(this).val();
               $.post("includes/espacios_disp.php", { id_carrera: id_carrera }, function(data){
                 $("#catalogo_org").html(data);
               });            
             });
           })
         });
         </script>
      
      <script>
         let ee = document.getElementById('cat_carrera');
         let ef = document.getElementById('catalogo_org');
         var cs = document.getElementById('catalogo');
         ee.addEventListener("change", function(){
            if (ee.value != 0 ) {
               cs.disabled = false;
               cs.hidden = false;
                        
            }else {
               cs.disabled = true;
            }
         });
         cs.addEventListener("change", function(){
            if (cs.value != 0 ) {
               ef.hidden = false;                        
            }else {
               cs.disabled = true;
            }
         });
      </script>
    
    <script>
        function validarCampoNumerico(input) {
            var valor = input.value;
            var mensajeError = document.getElementById("mensajeError");

            // Eliminar cualquier caracter no numérico
            valor = valor.replace(/\D/g, '');

            if (valor.length > 10 || valor.length <10 ) {
                input.value = valor.substring(0, 10); // Recortar el valor a 10 dígitos
                mensajeError.textContent = "Completa el campo con 10 digitos";
                // mensajeError2.textContent = "Completa el campo con 10 digitos";
                
            } else {
                mensajeError.textContent = "";
            }
        }
        function validarCampoNumerico2(input) {
            var valor = input.value;
            var mensajeError = document.getElementById("mensajeError2");

            // Eliminar cualquier caracter no numérico
            valor = valor.replace(/\D/g, '');

            if (valor.length > 10 || valor.length < 10 ) {
                input.value = valor.substring(0, 10); // Recortar el valor a 10 dígitos
                // mensajeError.textContent = "Completa el campo con 10 digitos";
                mensajeError2.textContent = "Completa el campo con 10 digitos";
                
            } else {
                mensajeError.textContent = "";
            }
        }
        function validarCampoNumerico3(input) {
            var valor = input.value;
            var mensajeError3 = document.getElementById("mensajeError3");

            // Eliminar cualquier caracter no numérico
            valor = valor.replace(/\D/g, '');

            if (valor.length > 3 || valor.length < 2 ) {
                input.value = valor.substring(0, 3); // Recortar el valor a 10 dígitos
                // mensajeError.textContent = "Completa el campo con 10 digitos";
                mensajeError3.textContent = "Completa el campo con 2 digitos";
                
            } else {
                mensajeError3.textContent = "";
            }
        }
    </script>

   </body>
  
</html>
<!--
veranos
Cocacola31416
UhZWoLwfoUm9
-->


