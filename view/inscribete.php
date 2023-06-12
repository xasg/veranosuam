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
            url: "validacion_correo.php",
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
     <style>

/* Estilos opcionales para el botón */
/* .whatsapp-button {
display: inline-block;
padding: 10px 20px;
background-color: green;
color: white;
text-decoration: none;
border-radius: 5px;
font-weight: bold;
cursor: pointer;
} */
.whatsapp-button {
position: fixed;
bottom: 20px;
left: 50px;
width: 54px;

z-index: 15;
background-color: #00b341;
color: white;
padding: 12px;
border-radius: 50%;
font-size: 20px;
cursor: pointer;
box-shadow: 0px 0px 4px #000;
}
.whatsapp-popup {
position: fixed;
z-index: 900;
bottom: 80px;
left: -300px; /* Cambiamos el valor para que la ventana esté oculta fuera del lado izquierdo */
width: 300px;
height: auto;
background-color: #fff;
border: 1px solid #ccc;
box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
opacity: 0;
transition: opacity 0.3s ease, left 0.3s ease; /* Actualizamos la transición para que se aplique a la propiedad left */
padding: 20px;
border-radius: 5px;
background-color: #00b341;


}

.whatsapp-popup.open {
opacity: 1;
left: 20px; /* Cambiamos el valor para que la ventana aparezca desde el lado izquierdo */
}

.whatsapp-popup h2 {
font-size: 20px;
margin-bottom: 10px;
}

.whatsapp-popup p {
font-size: 16px;
line-height: 1.5;
}

.whatsapp-popup .close-button {
position: absolute;
top: 10px;
right: 10px;
background: none;
border: none;
font-size: 18px;
cursor: pointer;
}

.whatsapp-popup .send-button {
display: inline-block;
padding: 8px 16px;
background-color: green;
color: white;
border: none;
border-radius: 5px;
font-weight: bold;
cursor: pointer;
margin-right: 10px;
}

.whatsapp-popup .input-field {
width: 100%;
padding: 8px;
border: 1px solid #ccc;
border-radius: 5px;
margin-bottom: 10px;
}
.head-whatssap{
background-color: #00b341;
color: #fff;
width: 100%;
}
textarea {
resize: none;
}
</style>
   </head>
   <body>
   <!-- <div class="whatsapp-button" onclick="abrirWhatsApp()"> -->
   <div class="whatsapp-button" onclick="toggleWhatsAppPopup()">
        <!-- <i class="fab fa-whatsapp"></i> -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" width="30" height="30" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
            <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
          </svg>
    </div>
    <!-- <button class="whatsapp-button" onclick="toggleWhatsAppPopup()">Abrir WhatsApp</button> -->

<div id="whatsappPopup" class="whatsapp-popup">
  <button class="close-button" onclick="toggleWhatsAppPopup()">X</button>
  <h2 class="text-light">¡Hola!</h2>
  <p class="text-light" >Gracias por visitar nuestro sitio web. ¿Cómo podemos ayudarte hoy?</p>

  <textarea class="input-field" id="whatsappMessage" placeholder="Escribe tu mensaje"></textarea>

  <button class="send-button" onclick="sendWhatsAppMessage()">Enviar</button>
  <button class="send-button" onclick="clearWhatsAppMessage()">Limpiar</button>
</div>
   <?php

if (isset($_GET['matricula'])) {
    $usuario = $_GET['matricula'];
?>
 <!-- <script>
        // function mostrarPopup() {
            Swal.fire({
                icon: 'success',
                title: 'Agregado correctamente',
                showConfirmButton: false,
                timer: 1500
            });
        // }
    </script> -->
<?php
        echo "<script>  Swal.fire({
            icon: 'success',
            title: 'Usuario con matricula {$usuario}  Agregado correctamente, Recuerda que tu postulación no será tomada en cuenta si no cargas tu documentación completa',
            showConfirmButton: true,
            customClass: {
               confirmButton: 'mi-clase-boton-confirmar'
             },
            timer: false
        });
        </script>";
    
    // header("Location: ../view/inscribete.php?registrado='si'");
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
                              <a href=" tel:+5215558146509"> 55 5814 6509</a>
                           </div>
                        </li>
                        <li class="d-flex align-items-center">
                           <div class="offcanvas__contact-icon mr-15">
                              <i class="fal fa-envelope"></i>
                           </div>
                           <div class="offcanvas__contact-text">
                              <a href="mailto:enlace.vinculacion@cua.uam.mx"><span>enlace.vinculacion@cua.uam.mx</span></a>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <div class="offcanvas__social">
                     <ul>
                        <!-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li> -->
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
                                    <a href="../#">Inicio</a>
                                 </li>
                                 <li>
                                    <a href="../#que_son">¿Qué son?</a>
                                 </li>

                                 <li>
                                    <a href="../#ors">OR´s</a>
                                 </li>
                                 
                                 <li>
                                    <a href="../#participa">Participa</a>
                                 </li>
                                 <li>
                                    <a href="../contacto.php">Contacto</a>
                                 </li>
                                 
                                 
                                 <li>
                                    <!-- <a href="#participa">Registro</a> -->
                                 </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-2 col-lg-2 col-6">
                     <div class="header__right d-flex align-items-center justify-content-end">
                        <div class="header__btn d-none d-xl-block">
                           <a class="border__btn s-3" target="_blank" href="https://www.cua.uam.mx/conoce-la-uam-unidad-cuajimalpa/coordinaciones-administrativas/coordinacion-de-vinculacion/desarrollo-profesional/estancias-profesionales-de-verano/informacion-para-alumnos?/epv">Convocatoria</a>
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
      <div class="boost__area pb-25">
         <div class="container">
            <div class="row  wow fadeInUp" data-wow-delay=".3s">
               <div class="col-xl-8 col-lg-6 ">
                  <div class="boost__content-wrapper mb-60">
                     <div class="section__title-wrapper mb-40">
                        <span class="section__subtitle-2">
                           <span>Part</span>icipa
                        </span>
                        <h2 class="section__title-2">
                           Postúlate
                        </h2>
                     </div>
                     <p class="mb-0">Solo podrás realizar el registro una vez, asegúrate de tener tu información y documentación completa</p>
                     <div class="approach__features s-2">
                        <div class="approach__features-item">
                           <div class="approach__arrow">
                              <img src="../assets/img/svg/arrow-2.svg" alt="">                            
                           </div>
                           <div class="approach__text">
                              <span>Datos generales</span>
                           </div>
                        </div>
                        <div class="approach__features-item">
                           <div class="approach__arrow">
                              <img src="../assets/img/svg/arrow-2.svg" alt="">                            
                           </div>
                           <div class="approach__text">
                              <span>Formato de postulación</span>
                           </div>
                        </div>
                        <div class="approach__features-item">
                           <div class="approach__arrow">
                              <img src="../assets/img/svg/arrow-2.svg" alt="">                            
                           </div>
                           <div class="approach__text">
                              <span>Constancia de créditos y promedio</span>
                           </div>
                        </div>
                        <div class="approach__features-item">
                           <div class="approach__arrow">
                              <img src="../assets/img/svg/arrow-2.svg" alt="">                            
                           </div>
                           <div class="approach__text">
                              <span>Carta compromiso</span>
                           </div>
                        </div>
                        <div class="approach__features-item">
                           <div class="approach__arrow">
                              <img src="../assets/img/svg/arrow-2.svg" alt="">                            
                           </div>
                           <div class="approach__text">
                              <span>CV</span>
                           </div>
                        </div>
                        <div class="approach__features-item">
                           <div class="approach__arrow">
                              <img src="../assets/img/svg/arrow-2.svg" alt="">                            
                           </div>
                           <div class="approach__text">
                              <span>Comprobante de seguro facultativo</span>
                           </div>
                        </div>
                        <div class="approach__features-item">
                           <div class="approach__arrow">
                              <img src="../assets/img/svg/arrow-2.svg" alt="">                            
                           </div>
                           <div class="approach__text">
                              <span>Identificación oficial</span>
                           </div>
                        </div>
                        <div class="approach__features-item">
                           <div class="approach__arrow">
                              <img src="../assets/img/svg/arrow-2.svg" alt="">                            
                           </div>
                           <div class="approach__text">
                              <span>CURP</span>
                           </div>
                        </div>
                        <div class="approach__features-item">
                           <div class="approach__arrow">
                              <img src="../assets/img/svg/arrow-2.svg" alt="">                            
                           </div>
                           <div class="approach__text">
                              <span>Comprobante de domicilio</span>
                           </div>
                        </div>
                        <div class="approach__features-item">
                           <div class="approach__arrow">
                              <img src="../assets/img/svg/arrow-2.svg" alt="">                            
                           </div>
                           <div class="approach__text">
                              <span>Formato de pago por transferencia</span>
                           </div>
                        </div>
                        <div class="approach__features-item">
                           <div class="approach__arrow">
                              <img src="../assets/img/svg/arrow-2.svg" alt="">                            
                           </div>
                           <div class="approach__text">
                              <span>Estado de cuenta bancario </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 ">
                  <div class="boost__thumb-wrapper mb-60">
                     <div class="boost__thumb w-img p-relative">
                        <img src="../assets/img/boost/boost-01.png" alt="image not found">
                        <div class="boost__shape-1"></div>
                     </div>
                     <div class="boost__shape-2">
                        <svg id="Group_27289" data-name="Group 27289" xmlns="http://www.w3.org/2000/svg" width="25.594" height="19.655" viewBox="0 0 25.594 19.655">
                           <path id="Path_26014" data-name="Path 26014" d="M321.713,46.082l-25.594,3.962,0,.008.163,1.6a23.645,23.645,0,0,0,7.662,14.089Z" transform="translate(-296.119 -46.082)" fill="#f8d458"/>
                         </svg>                         
                     </div>
                     <div class="boost__shape-3"></div>
                     <div class="boost__shape-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="44.495" height="44.279" viewBox="0 0 44.495 44.279">
                           <path id="Path_26017" data-name="Path 26017" d="M437.625,75.1a11.863,11.863,0,1,1-13.383,10.112l-10.288-1.433a22.245,22.245,0,1,0,25.1-18.964Z" transform="translate(-413.738 -64.809)" fill="#425fec"/>
                         </svg>
                     </div>
                     <div class="hero__btn-link wow fadeInUp" data-wow-delay=".8s">
                        <!-- <a class="solid__btn" href="#">Inscribete</a> -->
                        
                        <!-- Modal trigger button -->
                        <button type="button" class="solid__btn " data-bs-toggle="modal" data-bs-target="#modalId">
                          Registro
                        </button>
                        <br>
                        <!-- Button trigger modal -->
                        <!-- <button type="button" class="btn solid__btn btn-md" data-bs-toggle="modal" data-bs-target="#modalId2">
                          Si ya te registraste continua con tu proceso
                        </button> -->
                        
                        <!--  Modal trigger button  -->
                        <button type="button" class="btn solid__btn btn-lg" data-bs-toggle="modal" data-bs-target="#modalId3">
                          Si ya cuentas con tus documentos subelos aqui
                        </button>
                        
                        <!-- Modal Body Formato de postulacion-->
                        <div class="modal fade" id="modalId3" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                           <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                    <div class="modal-header bg-primary">
                                          <h5 class="modal-title" style="color: #fff;" id="modalTitleId">Continua llenando tus Documentos</h5>
                                          <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                       </div>

                                    <div class="modal-body">
                                    <div class="container-fluid">
                                    <form action="" method="" enctype="multipart/form-data">
                                    <div class="col-lg-auto">
                                                        <label for="matriculaValida_formato" class="form-label">Matricula</label>
                                                        <input type="number" class="form-control" min="10" maxlength="10" id="matriculaValida_formato" name="matriculaValida_formato" value="" oninput="validarCampoNumerico(this)" required>
                                                        <span id="mensajeError" style="color: red;"></span>
                                                        <div id="result-matricula-valida-formato"></div> 
                                                        <button type="button" class="btn btn-primary btn-sm " style="margin-top: 5px;">Validar</button>
                                                        
                                                    </div>
                                    </div>
                                    </form>
                                 </div>
                                 <div class="modal-footer bg-primary">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar Ventana</button>
                                    <!-- <button type="button" class="btn btn-primary">Save</button> -->
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        
                        
                        
                        
                        

                     

                        <!-- Modal -->
                        <div class="modal fade" id="modalId2" tabindex="-1" role="dialog" aria-labelledby="modalTitleId2" aria-hidden="true">
                           <div class="modal-dialog modal-lg " role="document">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title" id="modalTitleId">Llena tus documentos</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        
                                 </div>
                                 <div class="modal-body">
                                    

                                 <div id="progress-bar">
                                 <div id="progress"></div>
                        </div>

                        <form metod="post" acttion="../includes/crear_documentos_estudiante.php" enctype="multipart/form-data">
                                                   <!-- <div class="col-md-4">
                                                        <label for="correo" class="form-label">Correo</label>
                                                        <input type="email" class="form-control" id="correo" name="correo" value="" required>
                                                        <div id="result-username"></div> 
                                                        <a name="" id="" class="btn btn-primary" href="#" role="button" onclick="validarCampoNumerico(this)">Validar</a>
                                                   </div> -->
                                                   <div class="col-md-auto">
                                                        <label for="matriculaValida" class="form-label">Matricula</label>
                                                        <input type="number" class="form-control" min="10" maxlength="10" id="matriculaValida" name="matriculaValida" value="" oninput="validarCampoNumerico(this)" required>
                                                        <span id="mensajeError" style="color: red;"></span>
                                                        <div id="result-matricula-valida"></div> 
                                                        <button type="button" class="btn btn-primary btn-sm " >Validar</button>
                                                        <!-- <button type="submit" class="btn btn-primary btn-sm ">Enviar</button> -->
                                                    </div>
                                                    <!-- <button type="sumbit" class="btn solid__btn">Button</button> -->
                        </form>  
                        
                       
                        

                        
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar pestaña</button>
                        <!-- <button type="button" class="btn btn-primary">Save</button> -->
                     </div>
                  </div>
               </div>
            </div>
            
            
            
            <!-- Modal Body -->
                        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                        <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary text-white">
                                        <h5 class="modal-title text-white" id="modalTitleId">Datos Generales</h5>
                                            <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                            <form  action="../includes/crear_Usuario.php" method="post">   
                                            <div class="row justify-content-center align-items-center g-2">
                                                
                                            
                                                    <div class="col-md-4">
                                                        <label for="nombres" class="form-label">Nombre(s)</label>
                                                        <input type="text" class="form-control" id="nombres" name="nombres" value="" required>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="a_paterno" class="form-label">Apellido Paterno</label>
                                                        <input type="text" class="form-control" id="a_paterno" name="a_paterno" value="" required>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="a_materno" class="form-label">Apellido Materno</label>
                                                        <input type="text" class="form-control" id="a_materno" name="a_materno" value="" required>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="matricula" class="form-label">Matricula</label>
                                                        <input type="number" class="form-control" min="10" maxlength="10" id="matricula" name="matricula" value="" oninput="validarCampoNumerico(this)" required>
                                                        <span id="mensajeError" style="color: red;"></span>
                                                        <div id="result-matricula"></div> 
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="licenciatura" class="form-label">Licenciatura</label>
                                                        <!-- <input type="text" class="form-control" id="matricula" name="matricula" value="" required> -->
                                                        <select class="form-select " name="licenciatura" id="licenciatura">
                                                                <option selected>Selecciona tu carrera</option>
                                                                <option value="Administracion">Administración</option>
                                                                <option value="Biologia Molecular">Biología Molecular</option>                                                                
                                                                <option value="Ciencias de la Comunicacion">Ciencias de la Comunicación</option>                                                                
                                                                <option value="Derecho">Derecho</option>                                                                
                                                                <option value="Diseño">Diseño</option>                                                                
                                                                <option value="Doctorado en Ciencias Biologicas y de la Salud">Doctorado en Ciencias Biológicas y de la Salud</option>                                                                
                                                                <option value="Estudios Socioterritoriales">Estudios Socioterritoriales</option>                                                                
                                                                <option value="Humanidades">Humanidades</option>                                                                
                                                                <option value="Ingenieria Biologica">Ingeniería Biológica</option>                                                                
                                                                <option value="Ingenieria en Computacion">Ingeniería en Computación</option>                                                                
                                                                <option value="Matemáticas Aplicadas">Matemáticas Aplicadas</option>                                                                
                                                                <option value="Maestría en Diseño, Información y Comunicación">Maestría en Diseño, Información y Comunicación</option>                                                                
                                                                <option value="Posgrado en Ciencias Naturales e Ingeniería">Posgrado en Ciencias Naturales e Ingeniería</option>                                                                
                                                                <option value="Posgrado en Ciencias Sociales y Humanidades">Posgrado en Ciencias Sociales y Humanidades</option>                                                                
                                                                <option value="Tecnologías y Sistemas de Información">Tecnologías y Sistemas de Información</option>                                                                
                                                            </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="creditos" class="form-label">Creditos</label>
                                                        <input type="number"  class="form-control" min="2" maxlength="3" id="creditos" name="creditos" value="" oninput="validarCampoNumerico3(this)" required>
                                                        <span id="mensajeError3" style="color: red;"></span>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="edad" class="form-label">Edad</label>
                                                        <input type="number" class="form-control" id="edad" name="edad" value="" required>
                                                    </div>
                                                    <!-- <div class="col-md-4">
                                                          <label for="telefono" class="form-label">Telefono</label>
                                                          <input type="number" class="form-control" id="telefono" name="telefono" value="" required>
                                                   </div> -->
                                                    <div class="col-md-4">
                                                        <label for="correo" class="form-label">Correo</label>
                                                        <input type="email" class="form-control" id="correo" name="correo" value="" required>
                                                        <div id="result-username"></div> 
                                                      </div>
                                                     
                                                    <div class="col-md-4">
                                                       <label for="sexo" class="form-label">Sexo</label>
                                                       <select class="form-select " name="sexo" id="sexo">
                                                          <option selected>Selecciona</option>
                                                          <option value="Masculino">Masculino</option>
                                                          <option value="Femenino">Femenino</option>                                                                
                                                         </select>
                                                         </div>
                                                      </div>
                                                      
                                                      <div class="col-md-4">
                                                        <label for="telefono" class="form-label">Telefono</label>
                                                        <input type="number" class="form-control" min="10" maxlength="10" id="telefono" name="telefono" value="" oninput="validarCampoNumerico2(this)" required>
                                                        <!-- <input type="number" class="form-control" min="10" maxlength="10" id="telefonos" name="telefonos" value=""  oninput="validarCampoNumerico2(this)" required> -->
                                                        <span id="mensajeError2" style="color: red;"></span>
                                                        </div>
                                                   <!-- </div> -->
                                                   <!-- </div> -->
                                                   <button type="submit" class="btn solid__btn" style="margin-top:10px;" >Enviar Solicitud </button>
                                                </form>
                                        </div>
                                        <div class="modal-footer bg-primary">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar ventana</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <!-- Optional: Place to the bottom of scripts -->
                        <script>
                            const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
                        
                        </script>
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
               <img src="assets/img/shape/footer-shape.png" alt="">
            </div>
            <div class="container">
               <div class="row">
                  
                  <div class="container">
                     <div class="row footer__widget">
                        <br><br><br><br>
                        <div class="footer__logo">
                           <a href="index.html">
                              <br><br><br><br>
                              <img src="../assets/img/logo/logo.png" alt="logo not found">
                           </a>
                        </div>
                        <div class="footer__contact mb-30 col-md-4">
                           <span>Vasco de Quiroga 4871, Contadero, </span>
                           <span>Cuajimalpa de Morelos, 05348</span>
                           <span>Ciudad de México, CDMX</span>
                        </div>
                        <div class="touch__social col-md-auto w-50">
                           <!-- <form class="w-100 " action="index.php" method="post">
                              <h4 class="text-center">Contactanos</h4>
                              <br>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">correo</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label" required>Asunto</label>
                                <input type="text" class="form-control" id="asunto" name="asunto">
                            </div>
                            <div class="mb-3">
                              <label for="mensaje" class="form-label">Mensaje</label>
                              <textarea class="form-control" name="mensaje" id="mensaje" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                            <br><br>
                        </form> -->
                        <?php
                        if(isset($_POST['nombre'])){
                            $name = $_POST['nombre'];
                            $email = $_POST['email'];
                            $asunto = $_POST['asunto'];
                            $mensaje = $_POST['mensaje'];
                            $destinatario =  "alexis@fese.mx";
                            $asuntoCorreo = "Nuevo mensaje de Dudas";
                           //  $destinatario =  "enlace.vinculacion@cua.uam.mx";
                            $header =  "Correo electronico: $email" . "\r\n";
                            $header.= "Asunto: $asunto " .  "\r\n";
                            $header.="Mensaje: $mensaje";
                            $mail = mail($destinatario,$asuntoCorreo,$header);
                            if ($mail) {
                                # code...
                                echo"correo enviado";
                            }
                        }
                            
                        ?>
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
<!-- <script>
        function abrirWhatsApp() {
            // Reemplaza "xxxxxxxxxxxxx" con el número de teléfono de destino
            var numeroTelefono = "5637269723";
            
            // Crea el enlace para abrir WhatsApp con el número de teléfono
            var url = "https://api.whatsapp.com/send?phone=" + numeroTelefono;

            // Abre una nueva ventana o pestaña con el enlace de WhatsApp
            window.open(url);
        }
    </script>  -->
    <script>
    function toggleWhatsAppPopup() {
      var whatsappPopup = document.getElementById('whatsappPopup');
      whatsappPopup.classList.toggle('open');
    }

    function sendWhatsAppMessage() {
      var message = document.getElementById('whatsappMessage').value;
      var phoneNumber = '5637269723'; // Reemplaza con tu número de teléfono de WhatsApp

      var url = 'https://api.whatsapp.com/send?phone=' + phoneNumber + '&text=' + encodeURIComponent(message);

      // Ventana emergente sin redirección
      var popup = window.open(url, '_blank', 'width=400,height=600,scrollbars=yes,resizable=yes');
      popup.focus();
    }

    function clearWhatsAppMessage() {
      document.getElementById('whatsappMessage').value = '';
    }
  </script>
   </body>
  
</html>
<!--
veranos
Cocacola31416
UhZWoLwfoUm9
-->


