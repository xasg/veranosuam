<?php
error_reporting (E_ALL);
include_once('model/database.php'); 
$lugares = view_lugares();
$orgs = view_orgs();
$carreras = view_carreras();
$cat_carreras = view_cat_carreras();
?>

<!doctype html>
<html class="no-js" lang="zxx">
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
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <link rel="stylesheet" href="assets/css/style-btn-whatssap.css">
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
   <!-- BTN WHATSSAP -->
   <div class="whatsapp-button" onclick="toggleWhatsAppPopup()">
      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" width="30" height="30" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
         <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
         <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
         <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
      </svg>
   </div>

   <div id="whatsappPopup" class="whatsapp-popup">
      <button class="close-button" onclick="toggleWhatsAppPopup()">X</button>
      <h2 class="text-light">¡Hola!</h2>
      <p class="text-light" >Gracias por visitar nuestro sitio web. ¿Cómo podemos ayudarte hoy?</p>
      <textarea class="input-field" id="whatsappMessage" placeholder="Escribe tu mensaje"></textarea>
      <button class="send-button" onclick="sendWhatsAppMessage()">Enviar</button>
      <button class="send-button" onclick="clearWhatsAppMessage()">Limpiar</button>
   </div>
   <!--CIERRA BTN WHATSSAP-->


      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

      <!-- Mensaje Modal de envio de Documentos -->
      <?php
   if (isset($_REQUEST['envio'])) {
            /*El siguiente codico comentado es en caso de que el usuario suba sus documentos completos se enviara un correo en automatico al encargado del sistema avisando que ya subio toda su documentación*/
               //   $matricula = $_REQUEST['envio'];
               //   $destinatario =  "enlace.vinculacion@cua.uam.mx";
               //   $asuntoCorreo = "Usuario Registrado";
               //    //  $destinatario =  "enlace.vinculacion@cua.uam.mx";
               //    $header =  "Se registro" . "\r\n";
               //    $header.= "Asunto: Un usuario subio todos sus documentos " .  "\r\n";
               //    $header.="Mensaje: El usuario con la matricula '{$matricula}' subio todos sus documentos";
               //    $mail = mail($destinatario,$asuntoCorreo,$header);
            
               /* Cuando se envia el correo satisfactoriamente de que se realizo el registro, 
            al estudiante le muestra un mensaje indicando que subio los documentos correctamente*/
               
            // if ($mail) {

                  echo "<script>  Swal.fire({
                     icon: 'success',
                     title: 'Tus documentos se enviaron correctamente',
                     showConfirmButton: true,
                     customClass: {
                        confirmButton: 'mi-clase-boton-confirmar'
                        },
                     timer: 12500
                  });
                  </script>";
            //  }
   }
   
   ?>
      <div class="fix">
         <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
               <div class="offcanvas__content">
                  <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                     <div class="offcanvas__logo">
                        <a href="index.html">
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
                              <a href="tel:tel:+5215558146509"> 55 5814 6509</a>
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
                        
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="offcanvas__overlay"></div>
      <div class="offcanvas__overlay-white"></div>
      <!-- Offcanvas area start -->
      
      <!-- Header area start -->
      <header>
         <div id="header-sticky" class="header__area-3 header__transparent">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xl-2 col-lg-2 col-6">
                     <div class="header__logo">
                        <a href="index.html">
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
                                    <a href="#">Inicio</a>
                                 </li>
                                 <li>
                                    <a href="#que_son">¿Qué <?php echo ' son?';?></a>
                                 </li>

                                 <li>
                                    <a href="#ors">OR´s</a>
                                 </li>
                                 
                                 <li>
                                    <a href="#participa">Participa</a>
                                 </li>
                                 
                                 <li>
                                    <a href="./contacto.php">Contacto</a>
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
                           <a class="border__btn s-3" target="_blank" href="view/inscribete.php">Inscribete</a>
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
      
      <!-- Body main wrapper start -->
      <main>

      <!-- Aside menu area stat -->
      
      <section class="hero__area hero__hight d-flex align-items-center include__bg p-relative" data-background="assets/img/shape/c.png">
         <div class="hero__cercle">
            <img src="assets/img/shape//cercle.png" alt="image not found">
         </div>
      
         
         <div class="container">
            <div class="hero__main-wrapper">
               <div class="row align-items-center">
                  <div class="col-xl-6 col-lg-6 col-md-6">
                     <div class="hero__content-wrapper">
                        <div class="hero__content mb-60">
         
                           <span class="wow fadeInUp" data-wow-delay=".2s">Participa <span>en</span> las</span>
                           <h2 class="wow fadeInUp" data-wow-delay=".4s"> Estancias Profesionales de Verano</h2>
                           <p class="wow fadeInUp" data-wow-delay=".6s">Experimenta tu primer acercamiento al mundo laboral y 
                           pon en práctica los conocimientos y competencias adquiridas durante tu formación académica.</p>
                        </div>
                        <div class="hero__btn-link wow fadeInUp" data-wow-delay=".8s">
                           <a class="solid__btn" target="_blank" href="https://www.cua.uam.mx/conoce-la-uam-unidad-cuajimalpa/coordinaciones-administrativas/coordinacion-de-vinculacion/desarrollo-profesional/estancias-profesionales-de-verano/informacion-para-alumnos?/epv">Convocatoria</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6">
                     <div class="hero__thumb-wrapper-2 mb-60">
                        <div class="hero__thumb-2 w-img">
                           <img src="assets/img/hero/hero-thumb-2.png" alt="image not found">
                        </div>
                        <div class="hero__shape-7">
                           <img src="assets/img/shape/hero-shape-5.png" alt="image not found">
                        </div>
                        <div class="hero__shape-8">
                           <img src="assets/img/shape/hero-shape-6.png" alt="image not found">
                        </div>
                        <div class="hero__regtangle">
                           <img src="assets/img/shape/rectangle-3.png" alt="">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Aside menu area end -->

      <!-- Iconos Orgs area start -->
      <div class="brand__area pt-120 pb-120">
         <div class="container">
            <div class="row justify-content-center wow fadeInUp" data-wow-delay=".3s">
               <div class="col-12">
                  <div class="swiper brand__active">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="singel__brand">
                              <img src="assets/logos/empresa1.svg" alt="image not found">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="singel__brand">
                              <img src="assets/logos/empresa2.svg" alt="image not found">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="singel__brand">
                              <img src="assets/logos/empresa3.svg" alt="image not found">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="singel__brand">
                              <img src="assets/logos/empresa4.svg" alt="image not found">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="singel__brand">
                              <img src="assets/logos/empresa5.svg" alt="image not found">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="singel__brand">
                              <img src="assets/logos/empresa6.svg" alt="image not found">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="singel__brand">
                              <img src="assets/logos/empresa7.svg" alt="image not found">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="singel__brand">
                              <img src="assets/logos/empresa8.svg" alt="image not found">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="singel__brand">
                              <img src="assets/logos/empresa9.svg" alt="image not found">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Iconos Orgs start -->

      <!-- Que son area start -->
      <a name="que_son"></a>
      <div class="about__area grey-bg z-index-11 p-relative pt-120 pb-60">
         <div class="about__shape-1">
            <img src="assets/img/shape/about-shape-1.png" alt="image not found">
         </div>
         <div class="about__shape-2">
            <img src="assets/img/shape/about-shape-2.png" alt="image not found">
         </div>
         <div class="about__shape-3">
            <img src="assets/img/shape/rectangle-3.png" alt="image not found">
         </div>
         <div class="about__shape-4">
            <img src="assets/img/shape/rectangle-4.png" alt="image not found">
         </div>
         
         <div class="container">
            <div class="row align-items-center wow fadeInUp" data-wow-delay=".3s">
               <div class="col-xl-6 col-lg-6">
                  <div class="about__thumb-wrapper mb-60">
                     <div class="about__thumb w-img">
                        <img src="assets/img/about/about-thumb.png" alt="image not found">
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6">
                  <div class="about__content-wapper mb-60">
                     <div class="section__title-wrapper mb-40">
                        <span class="section__subtitle-2">
                           <span>¿Qué</span> son?
                        </span>
                        <h2 class="section__title-2">
                           Estancias Profesionales de Verano
                        </h2>
                     </div>
                     <p>Son estancias en las que los alumnos y recién egresados ponen en práctica los conocimientos, 
                        habilidades y competencias adquiridos durante su formación académica y, también, obtienen su primer acercamiento al mundo laboral.</p>
                        <p>El objetivo de las estancias es coadyuvar en el proceso de formación profesional de alumnos de la Unidad Cuajimalpa mediante 
                           la realización de prácticas profesionales y propiciar la inserción de alumnos en Organizaciones Receptoras (OR’s).
                        </p>
                     <div class="about__features-box">
                        <div class="about__features-item">
                           <div class="about__features-icon">
                              <i class="fa-solid fa-check"></i>
                           </div>
                           <div class="about__features-content">
                              <p>Periodo de inscripción</p>
                              <p>– Del 8 de mayo al 9 de junio</p>
                           </div>
                        </div>
                        <div class="about__features-item">
                           <div class="about__features-icon s-2">
                              <i class="fa-solid fa-check"></i>
                           </div>
                           <div class="about__features-content">
                              <p>Adquiere habilidades laborales</p>
                           </div>
                        </div>
                        <div class="about__features-item">
                           <div class="about__features-icon s-3">
                              <i class="fa-solid fa-check"></i>
                           </div>
                           <div class="about__features-content">
                              <p>Pon en practica tus conocimientos</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Que son area end -->

      <!-- Organización area start -->
      <a name="ors"></a>
      <section class="features__area p-relative features-bg pt-120 pb-30">
         <div class="features__pattern">
            <img src="assets/img/shape/features-shape.png" alt="image not found">
         </div>
         <div class="container">
            <div class="row wow fadeInUp" data-wow-delay=".3s">
               <div class="col-xl-3 col-lg-3">
                  <div class="features__thumb-wrapper mb-60">
                     <div class="features__thumb">
                        <img src="assets/img/features/02.png" alt="image not found">
                     </div>
                     <div class="features__cercle-1"></div>
                     <div class="features__cercle-2 s-2"></div>
                     <div class="features__shape-1">
                        <div class="features__shape-content">
                           <div class="features__traffic">
                              <div class="content">
                                 <span>Lugares disponibles</span>
                                 <h5><?php  echo $lugares ;  ?> espacios</h5>
                              </div>
                              <div class="icon">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="18.953" height="11.624" viewBox="0 0 18.953 11.624">
                                    <g id="trending-up" transform="translate(1.414 1.414)">
                                       <path id="Path_473" data-name="Path 473" d="M17.125,6l-6.963,6.963L6.5,9.3,1,14.8" transform="translate(-1 -6)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                       <path id="Pathccx_474" data-name="Path 474" d="M17,6h4.4v4.4" transform="translate(-5.273 -6)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                    </g>
                                 </svg>                            
                              </div>
                           </div>
                           
                        </div>
                     </div>
                     <div class="features__shape-2">
                        <div class="features__shape-content">
                           <div class="features__traffic s-2">
                              <div class="content">
                                 <span>Organizaciones registradas</span>
                                 <h5><?php echo $orgs ?></h5>
                              </div>
                              <div class="icon">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="21.397" height="12.957" viewBox="0 0 21.397 12.957">
                                    <g id="trendincxcxg-up" transform="translate(1.414 1.414)">
                                      <path id="Path_4cc73" data-name="Path 473" d="M19.569,6,11.55,14.018,7.33,9.8,1,16.128" transform="translate(-1 -6)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                      <path id="Path_4ccx74" data-name="Path 474" d="M17,6h5.064v5.064" transform="translate(-3.496 -6)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                    </g>
                                  </svg>                                                                                              
                              </div>
                           </div>
                           
                        </div>
                     </div>
                  </div>
               </div>
               
               <div class="col-xl-9 col-lg-9">
                  <div class="features__content-wrapper">
                     <div class="section__title-wrapper mb-25">
                        <span class="section__subtitle">
                           <span> Organizaciones </span> Receptoras
                        </span>
                        <h2 class="section__title">
                           OR's <span class="down__mark-line">    </span> 
                        </h2>
                        <p>Aquí encontrarás información sobre las Organizaciones Receptoras participantes en la convocatoria 2023.</p>
                     </div>

                     <div class="bd-faq__wrapper mb-60">
                           <!-- Lista desplegable de grado y carreras con consulta a la base de datos -->
                           <div class="mb-3">
                              <label for="" class="form-label">Selecciona tu carrera</label>
                              <select class="form-select form-select-lg" name="cat_carrera" id="cat_carrera">
                              
                              <option value = "0" selected>Selecciona tu grado</option>
                              <?php
                                    foreach ($carreras as $resul) {
                                       # code...
                                       // while($resul = $carreras->fetch_assoc()){
                                       echo '<option value="'.$resul['id_grado'].'">'.$resul['nombre_grado'].'</option>';    
                                    }

                                     ?>
                              </select>
                              <br>
                              <select id="catalogo" name="catalogo" class="form-select form-select-lg"   hidden="true">
                                 <option selected disabled >Selecciona tu carrera </option>
                              </select>
                              <br>
                           </div>
                           <div class="bd-faq__wrapper mb-60" id="catalogo_org" name="catalogo_org" hidden = true>
                           </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Organizaciòn area end -->

      <!-- Sección Participa -->
      <a name="participa"></a>
      <br><br><br>
      <div class="boost__area pb-25">
         <div class="container">
            <div class="row  wow fadeInUp" data-wow-delay=".3s">
               <div class="col-xl-6 col-lg-6">
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
                              <img src="assets/img/svg/arrow-2.svg" alt="">                            
                           </div>
                           <div class="approach__text">
                              <span>Datos generales</span>
                           </div>
                        </div>
                        <div class="approach__features-item">
                           <div class="approach__arrow">
                              <img src="assets/img/svg/arrow-2.svg" alt="">                            
                           </div>
                           <div class="approach__text">
                              <span>Formato de postulación</span>
                           </div>
                        </div>
                        <div class="approach__features-item">
                           <div class="approach__arrow">
                              <img src="assets/img/svg/arrow-2.svg" alt="">                            
                           </div>
                           <div class="approach__text">
                              <span>Constancia de créditos y promedio</span>
                           </div>
                        </div>
                        <div class="approach__features-item">
                           <div class="approach__arrow">
                              <img src="assets/img/svg/arrow-2.svg" alt="">                            
                           </div>
                           <div class="approach__text">
                              <span>Carta compromiso</span>
                           </div>
                        </div>
                        <div class="approach__features-item">
                           <div class="approach__arrow">
                              <img src="assets/img/svg/arrow-2.svg" alt="">                            
                           </div>
                           <div class="approach__text">
                              <span>CV</span>
                           </div>
                        </div>
                        <div class="approach__features-item">
                           <div class="approach__arrow">
                              <img src="assets/img/svg/arrow-2.svg" alt="">                            
                           </div>
                           <div class="approach__text">
                              <span>Comprobante de seguro facultativo</span>
                           </div>
                        </div>
                        <div class="approach__features-item">
                           <div class="approach__arrow">
                              <img src="assets/img/svg/arrow-2.svg" alt="">                            
                           </div>
                           <div class="approach__text">
                              <span>Identificación oficial</span>
                           </div>
                        </div>
                        <div class="approach__features-item">
                           <div class="approach__arrow">
                              <img src="assets/img/svg/arrow-2.svg" alt="">                            
                           </div>
                           <div class="approach__text">
                              <span>CURP</span>
                           </div>
                        </div>
                        <div class="approach__features-item">
                           <div class="approach__arrow">
                              <img src="assets/img/svg/arrow-2.svg" alt="">                            
                           </div>
                           <div class="approach__text">
                              <span>Comprobante de domicilio</span>
                           </div>
                        </div>
                        <div class="approach__features-item">
                           <div class="approach__arrow">
                              <img src="assets/img/svg/arrow-2.svg" alt="">                            
                           </div>
                           <div class="approach__text">
                              <span>Formato de pago por transferencia</span>
                           </div>
                        </div>
                        <div class="approach__features-item">
                           <div class="approach__arrow">
                              <img src="assets/img/svg/arrow-2.svg" alt="">                            
                           </div>
                           <div class="approach__text">
                              <span>Estado de cuenta bancario </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6">
                  <div class="boost__thumb-wrapper mb-60">
                     <div class="boost__thumb w-img p-relative">
                        <img src="assets/img/boost/boost-01.png" alt="image not found">
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
                        <a class="solid__btn" href="./view/inscribete.php">Inscribete</a>
                     </div>
                  </div>
            </div>
            </div>
         </div>
      </div>
      <!-- Sección Participa end -->


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
                              <img src="assets/img/logo/logo.png" alt="logo not found">
                           </a>
                        </div>
                        <div class="footer__contact mb-30 col-md-4">
                           <span>Vasco de Quiroga 4871, Contadero, </span>
                           <span>Cuajimalpa de Morelos, 05348</span>
                           <span>Ciudad de México, CDMX</span>
                        </div>
                        <div class="touch__social col-md-auto w-50">
                           <!--El siguiente es el formulario de contacto-->
                           <form class="w-100 " action="index.php" method="post">
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
                        </form>

                        <?php
                        if(isset($_POST['nombre'])){
                            $name = $_POST['nombre'];
                            $email = $_POST['email'];
                            $asunto = $_POST['asunto'];
                            $mensaje = $_POST['mensaje']; 
                            $asuntoCorreo = "Nuevo mensaje de Dudas";
                            $destinatario =  "enlace.vinculacion@cua.uam.mx";
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
      <!--El siguiente Script es para mostrar las relaciones de grado carreras-->
      <script src="assets/js/catcarreras.js"></script>
      <!--El siguiente Script es para mostrar las relaciones de grado cat carrera y listas desplegables-->
      <script src="assets/js/catgrado.js"></script>
      <!--El siguiente Script es para la funcionalidad del boton de whatssap-->
      <script src="assets/js/btnws.js"></script>
   </body>
  
</html>
<!--
veranos
Cocacola31416
UhZWoLwfoUm9
-->


