<!doctype html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title> Estancias Profesionales de Verano UAMC</title>
      
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

      <!-- CSS here -->
      <link rel="stylesheet" href="assets/app/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/app/css/meanmenu.min.css">
      <link rel="stylesheet" href="assets/app/css/animate.css">
      <link rel="stylesheet" href="assets/app/css/swiper-bundle.min.css">
      <link rel="stylesheet" href="assets/app/css/slick.css">
      <link rel="stylesheet" href="assets/app/css/backtotop.css">
      <link rel="stylesheet" href="assets/app/css/magnific-popup.css">
      <link rel="stylesheet" href="assets/app/css/fontawesome-pro.css">
      <link rel="stylesheet" href="assets/app/css/spacing.css">
      <link rel="stylesheet" href="assets/app/css/main.css">
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    
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
// $usuario = $_SESSION['name'];
?>
<?php
   if (isset($_REQUEST['usuarionuevo'])) {
?>
 <script>
        // function mostrarPopup() {
            Swal.fire({
                icon: 'success',
                title: 'Usuario con el correo: <?php echo $_REQUEST['usuarionuevo']; ?> creado correctamente',
                showConfirmButton: true,
                customClass: {
               confirmButton: 'mi-clase-boton-confirmar'
               },
                timer: 13500
            });
        // }
    </script>
<?php
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
                        <img src="assets/img/logo/logo.png" alt="logo not found">
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
                              <a href="tel:+5215558146509"> 55 5814 6509</a>
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
                     <!-- <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                     </ul> -->
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
                           <img src="assets/img/logo/logo.png" alt="logo not found">
                        </a>
                     </div>
                  </div>
                  <div class="col-xl-8 col-lg-8 d-none d-lg-block">
                     <div class="menu__main-wrapper-3 d-flex justify-content-end">
                        <div class="main-menu main-menu-3 d-none d-none d-lg-block">
                           <nav id="mobile-menu">
                              <ul>

                                 <li>
                                    <a href="index.php">Inicio</a>
                                 </li>
                                 
                                 <li>
                                    <a href="index.php#que_son">¿Qué son?</a>
                                 </li>

                                 <li>
                                    <a href="index.php#ors">OR´s</a>
                                 </li>
                                 
                                 <li>
                                    <a href="index.php#participa">Participa</a>
                                 </li>
                                 <li>
                                    <a href="#">Contacto</a>
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
      <div class="boost__area ">
         <div class="container">
            <div class="row  wow fadeInUp" data-wow-delay=".3s">
               <div class="col-xl-12 col-lg-12 ">
                  <div class="boost__content-wrapper mb-60">
                     <div class="section__title-wrapper mb-40">
                        <span class="section__subtitle-2">
                           <span>Contac</span>tanos
                        </span>
                        <h2 class="section__title-2">
                           Contactanos
                        </h2>
                        <p>
                        Si tienes alguna duda, comentario o sugerencia puedes dejarnos un mensaje en la forma de contacto, o marcarnos al número telefónico.
                        </p>
                        <div class="container row">
                           <section class="col-md-8">
                              <h3 class="h3-formulario">
                                 Ubicación
                              </h3>
                              <p>
                              Av. Vasco de Quiroga 4871, Col. Santa Fe Cuajimalpa, Delegación Cuajimalpa de Morelos, Ciudad de México,  C.P. 05348.
                              </p>
                              <p>
                              Horario de atención: Lunes a viernes de 9am a 5pm 
                              </p>
                           </section>
                           <section class="col-md-auto">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.367589777984!2d-99.28315802394573!3d19.353229843209306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2074a4aea180d%3A0x1151e61121fd01f3!2sUniversidad%20Aut%C3%B3noma%20Metropolitana%20Unidad%20Cuajimalpa!5e0!3m2!1ses-419!2smx!4v1685769645597!5m2!1ses-419!2smx" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                           </section>
                        </div>

                        <div class="container row">
                           <section class="col-md-4">
                              <h3 class="h3-formulario">
                                 Contactanos por medio de:
                              </h3>
                              <p>
                                 <b>Correo:</b><br>
                                 <a href="mailto:enlace.vinculacion@cua.uam.mx"><i class="formulario-contacto">enlace.vinculacion@cua.uam.mx</i></a>
                              </p>

                              <p>
                                 <b>Telefono:</b><br>
                                 <a href="tel:+5215558146509"><i class="formulario-contacto">55 5814 6509</i></a>   
                              </p>
                           </section>
                        </div>
                     </div>
                      <!-- <div class="container m-0 row justify-content-center">
                           <h3 class="h3-formulario">
                                 Comentarios:
                           </h3><br>
                        <form class="w-100 " action="contacto.php" method="post">
                           
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">correo</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Asunto</label>
                                <input type="text" class="form-control" id="asunto" name="asunto" required>
                            </div>
                            <div class="mb-3">
                              <label for="mensaje" class="form-label">Mensaje</label>
                              <textarea class="form-control" name="mensaje" id="mensaje" rows="3" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" style="background: #3249b3;">Enviar Mensaje</button>
                            <br><br>
                        </form>
                        
                         -->

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
                               ?>
                               <script >
                                allert("correo enviado correctamente");
                               </script>
                               <?php
                           }
                       }
                           
                       ?>
                       <?php
                        // if(isset($_POST['nombre'])){
                        //     $name = $_POST['nombre'];
                        //     $email = $_POST['email'];
                        //     $asunto = $_POST['asunto'];
                        //     $mensaje = $_POST['mensaje'];
                        //     $asuntoCorreo = "Nuevo mensaje de contacto";
                        //     $destinatario =  "enlace.vinculacion@cua.uam.mx";
                        //     $header =  "Correo electronico: $email" . "\r\n";
                        //     $header.= "Asunto: $asunto " .  "\r\n";
                        //     $header.="Mensaje: $mensaje";
                        //     $mail = @mail($destinatario,$asuntoCorreo,$header);
                        //     if ($mail) {
                        //         # code...
                        //         ?>
                        <!-- //         <h4> -->
                        <!-- //             enviado exitosamente -->
                        <!-- //         </h4> -->
                                <?php
                        //     }
                        // }
                            
                        ?>

                        <br><br><br><br>
                      </div>      

                      <div class="container row">
                        <h3 class="col-md-6">
                           
                        </h3>
                        <h3 class="">
                           
                        </h3>
                      </div>

                     

                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 ">
                  <div class="boost__thumb-wrapper mb-60">
                     <div class="boost__thumb w-img p-relative">
                        
                        <br><br><br>
                        <div class="boost__shape-1"></div>
                     </div>
                     <div class="boost__shape-2">
                         </svg>                         
                     </div>
                     <div class="boost__shape-3"></div>
                     <div class="boost__shape-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100.495" height="90.279" viewBox="0 10 45.495 0.279">
                           <path id="Path_26017" data-name="Path 26017" d="M437.625,75.1a11.863,11.863,0,1,1-13.383,10.112l-10.288-1.433a22.245,22.245,0,1,0,25.1-18.964Z" transform="translate(-413.738 -64.809)" fill="#425fec"/>
                         </svg>
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
                  
                  
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                     <div class="footer__widget mb-55">
                        <div class="footer__logo mb-20">
                           <a href="index.html">
                              <img src="assets/img/logo/logo.png" alt="logo not found">
                           </a>
                        </div>
                        <div class="footer__contact mb-30">
                           <span>Vasco de Quiroga 4871, Contadero, </span>
                           <span>Cuajimalpa de Morelos, 05348</span>
                           <span>Ciudad de México, CDMX</span>
                        </div>
                        <!-- <div class="touch__social">
                           <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                           <a href="#"><i class="fa-brands fa-twitter"></i></a>
                           <a href="#"><i class="fa-brands fa-youtube"></i></a>
                           <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        </div> -->
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
      <script src="assets/app/js/vendor/jquery-3.6.0.min.js"></script>
      <script src="assets/app/js/vendor/waypoints.min.js"></script>
      <script src="assets/app/js/bootstrap.min.js"></script>
      <script src="assets/app/js/meanmenu.min.js"></script>
      <script src="assets/app/js/swiper-bundle.min.js"></script>
      <script src="assets/app/js/slick.min.js"></script>
      <script src="assets/app/js/magnific-popup.min.js"></script>
      <script src="assets/app/js/backtotop.js"></script>
      <script src="assets/app/js/counterup.js"></script>
      <script src="assets/app/js/wow.min.js"></script>
      <script src="assets/app/js/imagesloaded.pkgd.min.js"></script>
      <script src="assets/app/js/isotope.pkgd.min.js"></script>
      <script src="assets/app/js/ajax-form.js"></script>
      <script src="assets/app/js/main.js"></script>
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



